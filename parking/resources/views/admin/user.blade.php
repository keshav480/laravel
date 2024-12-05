@include('admin.layout.header')

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> All Users
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
           
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Users</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Name </th>
                            <th> Email </th>
                            <th> User Role </th>
                            <th> User Password </th>
                            <th> Update</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                        
                          <tr>
                            <td>
                            {{ $user->name}}
                            </td>
                            <td> {{ $user->email}}</td>
                            <td>
                              <label class="badge badge-gradient-success">{{ $user->role}}</label>
                            </td>
                            <td> {{ $user->password}} </td>
                            <td> <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#myModal"data-id="{{ $user->id }}"data-name="{{ $user->name }}"data-email="{{ $user->email }}"data-password="{{ $user->password }}"data-role="{{ $user->role }}">Edit</a>
                              <a href="{{route('admin.user.delete', $user->id)}}"class="btn btn-danger btn-sm">Delete</a>
                            </td>
                          </tr>
                          
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
          
                <form action="admin/user/edit" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="userId" class="form-label">ID</label>
                        <input type="text" class="form-control" id="userId" name="id" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="userName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="userName" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="userEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="userEmail" name="email">
                    </div>
                    
                    <div class="mb-3">
                        <label for="userRole" class="form-label">Role</label>
                        <select class="form-control" id="userRole" name="role">
                            <option value="admin">Admin</option>
                            <option value="user">user</option>
                            
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

        @include('admin.layout.footer')
        <!--  -->
        <script>
    // Listen for the 'show.bs.modal' event, which is fired when the modal is about to be shown
    const myModal = document.getElementById('myModal');
    myModal.addEventListener('show.bs.modal', function (event) {
        // Get the button that triggered the modal
        const button = event.relatedTarget;

        // Get data from the button (using data- attributes)
        const userId = button.getAttribute('data-id');
        const userName = button.getAttribute('data-name');
        const userEmail = button.getAttribute('data-email');
        const userPassword = button.getAttribute('data-password');
        const userRole = button.getAttribute('data-role');

        // Set values in the modal's input fields
        const modalId = myModal.querySelector('#userId');
        const modalName = myModal.querySelector('#userName');
        const modalEmail = myModal.querySelector('#userEmail');
        const modalPassword = myModal.querySelector('#userPassword');
        const modalRole = myModal.querySelector('#userRole');

        modalId.value = userId;
        modalName.value = userName;
        modalEmail.value = userEmail;
        modalPassword.value = userPassword;
        modalRole.value = userRole;  // This will pre-select the role based on the data-role attribute
    });
</script>

