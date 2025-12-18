@if (session('success'))
    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1055;">
        <div class="toast align-items-center text-success bg-withe border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex" data-bs-dismiss="toast">
                <div class="toast-body mt-3">
                    <div>
                        <h6 class="text-center" style="font-weight: 100;"><i class="fa fa-check ms-4 me-4" style="font-size: 15px;"></i>{{ session('success') }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif


<!-- Change Password Modal -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form method="POST" action="{{ url('/change-password') }}">
                @csrf

                <div class="modal-body">

                    <!-- Current Password -->
                    <div class="mb-3">
                        <label class="form-label">Current Password</label>
                        <input type="password" id="currpassword" name="currpassword" class="form-control" required>
                        @error('currpassword')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- New Password -->
                    <div class="mb-3">
                        <label class="form-label">New Password</label>
                        <input type="password" id="newpassword" name="newpassword" class="form-control" required>
                        @error('newpassword')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <label class="form-label">Confirm New Password</label>
                        <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" required>
                    </div>

                    <!-- Session Errors -->
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Update Password
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
