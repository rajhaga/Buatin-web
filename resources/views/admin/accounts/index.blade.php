@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Header Section -->
    <div class="header-section">
        <div class="header-left">
            <h2>Manage Accounts</h2>
            <p class="subtitle">Manage user accounts and their roles in the system</p>
        </div>
        <div class="header-right">
            <a href="{{ route('admin.accounts.create') }}" class="btn-add">
                <i class="fa-solid fa-plus"></i>
                Add Account
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Table Section -->
    <div class="table-container">
        <table class="data-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Location</th>
                    <th>Role</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($accounts as $account)
                    <tr>
                        <td>
                            <div class="name-cell">
                                <div class="avatar">{{ strtoupper(substr($account->name, 0, 2)) }}</div>
                                <span>{{ $account->name }}</span>
                            </div>
                        </td>
                        <td>{{ $account->email }}</td>
                        <td>{{ $account->phone }}</td>
                        <td>{{ $account->location }}</td>
                        <td>
                            <span class="role-badge {{ $account->role === 'admin' ? 'admin' : 'user' }}">
                                {{ $account->role }}
                            </span>
                        </td>
                        <td class="actions-cell">
                            <a href="{{ route('admin.accounts.edit', $account->id) }}" class="btn-edit">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('admin.accounts.destroy', $account->id) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete" onclick="return confirm('Are you sure?')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<style>
    .data-table th:nth-child(3),
.data-table th:nth-child(4),
.data-table td:nth-child(3),
.data-table td:nth-child(4) {
    text-align: center;
}

.content-wrapper {
    padding: 24px;
    max-width: 1200px;
    margin: 0 auto;
}

.header-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
}

.header-left h2 {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 4px;
}

.subtitle {
    color: #666;
    font-size: 14px;
}

.btn-add {
    display: inline-flex;
    align-items: center;
    padding: 8px 16px;
    background: #4a154b;
    color: white;
    border-radius: 6px;
    font-size: 14px;
    text-decoration: none;
    gap: 8px;
}

.alert {
    padding: 12px;
    border-radius: 6px;
    margin-bottom: 24px;
}

.alert-success {
    background: #d4edda;
    border: 1px solid #c3e6cb;
    color: #155724;
}

.table-container {
    background: white;
    border-radius: 8px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    overflow: hidden;
}

.data-table {
    width: 100%;
    border-collapse: collapse;
}

.data-table th {
    background: #f8f9fa;
    padding: 12px 16px;
    text-align: left;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    color: #666;
}

.data-table td {
    padding: 16px;
    border-bottom: 1px solid #eee;
}

.name-cell {
    display: flex;
    align-items: center;
    gap: 12px;
}

.avatar {
    width: 36px;
    height: 36px;
    background: #4a154b;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    font-weight: 500;
}

.role-badge {
    display: inline-block;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 12px;
    font-weight: 500;
}

.role-badge.admin {
    background: #4a154b;
    color: white;
}

.role-badge.user {
    background: #e9ecef;
    color: #495057;
}

.actions-cell {
    text-align: right;
    white-space: nowrap;
}

.btn-edit, .btn-delete {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    border: none;
    border-radius: 4px;
    background: transparent;
    color: #666;
    cursor: pointer;
    transition: background-color 0.2s;
}

.btn-edit:hover {
    background: #e9ecef;
    color: #4a154b;
}

.btn-delete:hover {
    background: #fee2e2;
    color: #dc2626;
}

.delete-form {
    display: inline-block;
}
</style>
@endsection