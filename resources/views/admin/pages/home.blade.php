@extends('admin.partials.master')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
  <div class="row">
      <div class="col-12">
          <div class="card shadow-sm mb-4">
              <div class="card-body">
                  <h1 class="h3 mb-0 text-gray-800">Welcome to Your Website Admin Panel</h1>
                  <p class="mb-0">Here you can manage your website content easily.</p>
              </div>
          </div>
      </div>
  </div>

  <!-- Quick Actions -->
  <div class="row mb-4">
      <div class="col-12">
          <div class="card shadow-sm">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Quick Actions</h6>
              </div>
              <div class="card-body">
                  <div class="row">
                      <!-- Changed from col-md-3 col-sm-6 to col-12 col-sm-6 col-md-3 for proper mobile stacking -->
                      <div class="col-12 col-sm-6 col-md-3 mb-3">
                          <a href="{{ route('hero.edit') }}" class="btn btn-primary btn-block py-4">
                              <i class="fa fa-film fa-2x mb-2"></i><br>
                              Edit Hero Video 
                          </a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-3 mb-3">
                          <a href="{{ route('gallery.index') }}" class="btn btn-success btn-block py-4">
                              <i class="fa fa-image fa-2x mb-2"></i><br>
                              Manage Gallery
                          </a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-3 mb-3">
                          <a href="{{ route('films.index') }}" class="btn btn-info btn-block py-4">
                              <i class="fa fa-video-camera fa-2x mb-2"></i><br>
                              Manage Films
                          </a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-3 mb-3">
                          <a href="{{ route('clients.index') }}" class="btn btn-warning btn-block py-4">
                              <i class="fa fa-trademark fa-2x mb-2"></i><br>
                              Manage Client Logos
                          </a>
                      </div>
                  </div>
                  <!-- Added new row for Teams management -->
                  <div class="row mt-3">
                      <div class="col-12 col-sm-6 col-md-3 mb-3">
                          <a href="{{ route('teams.index') }}" class="btn btn-danger btn-block py-4">
                              <i class="fa fa-users fa-2x mb-2"></i><br>
                              Manage Team Members
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Content Statistics and Preview -->
  <div class="row mb-4">
      <!-- Statistics -->
      <div class="col-lg-6 mb-4">
          <div class="card shadow-sm">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Content Statistics</h6>
              </div>
              <div class="card-body">
                  <div class="row">
                      <!-- Changed from col-6 to col-12 col-sm-6 for proper mobile stacking -->
                      <div class="col-12 col-sm-6 mb-3">
                          <div class="card border-left-primary shadow-sm h-100 py-2">
                              <div class="card-body">
                                  <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                              Videos</div>
                                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['videos'] }}</div>
                                      </div>
                                      <div class="col-auto">
                                          <i class="fa fa-film fa-2x text-gray-300"></i>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-12 col-sm-6 mb-3">
                          <div class="card border-left-success shadow-sm h-100 py-2">
                              <div class="card-body">
                                  <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                              Gallery Items</div>
                                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['gallery_items'] }}</div>
                                      </div>
                                      <div class="col-auto">
                                          <i class="fa fa-image fa-2x text-gray-300"></i>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-12 col-sm-6 mb-3">
                          <div class="card border-left-info shadow-sm h-100 py-2">
                              <div class="card-body">
                                  <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                              Films</div>
                                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['films'] }}</div>
                                      </div>
                                      <div class="col-auto">
                                          <i class="fa fa-video-camera fa-2x text-gray-300"></i>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-12 col-sm-6 mb-3">
                          <div class="card border-left-warning shadow-sm h-100 py-2">
                              <div class="card-body">
                                  <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                              Client Logos</div>
                                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['client_logos'] }}</div>
                                      </div>
                                      <div class="col-auto">
                                          <i class="fa fa-trademark fa-2x text-gray-300"></i>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- Added Team Members Stat Card -->
                      <div class="col-12 col-sm-6 mb-3">
                          <div class="card border-left-danger shadow-sm h-100 py-2">
                              <div class="card-body">
                                  <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                          <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                              Team Members</div>
                                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['team_members'] }}</div>
                                      </div>
                                      <div class="col-auto">
                                          <i class="fa fa-users fa-2x text-gray-300"></i>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Content Freshness -->
      <div class="col-lg-6 mb-4">
          <div class="card shadow-sm">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Content Freshness</h6>
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                                  <th>Content Type</th>
                                  <th>Last Updated</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td><i class="fa fa-film text-primary mr-2"></i> Hero Video</td>
                                  <td>{{ $lastUpdates['hero'] }}</td>
                              </tr>
                              <tr>
                                  <td><i class="fa fa-image text-success mr-2"></i> Gallery</td>
                                  <td>{{ $lastUpdates['gallery'] }}</td>
                              </tr>
                              <tr>
                                  <td><i class="fa fa-video-camera text-info mr-2"></i> Films</td>
                                  <td>{{ $lastUpdates['films'] }}</td>
                              </tr>
                              <tr>
                                  <td><i class="fa fa-trademark text-warning mr-2"></i> Client Logos</td>
                                  <td>{{ $lastUpdates['clients'] }}</td>
                              </tr>
                              <!-- Added Team Members Row -->
                              <tr>
                                  <td><i class="fa fa-users text-danger mr-2"></i> Team Members</td>
                                  <td>{{ $lastUpdates['teams'] }}</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Help Section -->
  <div class="row">
      <div class="col-12 mb-4">
          <div class="card shadow-sm">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Getting Started</h6>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-md-4 mb-4">
                          <div class="card h-100">
                              <div class="card-body">
                                  <h5 class="card-title">Managing Hero Video</h5>
                                  <p class="card-text">
                                      Upload and configure the hero video that appears at the top of your homepage.
                                  </p>
                                  <a href="{{ route('hero.edit') }}" class="btn btn-sm btn-primary">Learn More</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 mb-4">
                          <div class="card h-100">
                              <div class="card-body">
                                  <h5 class="card-title">Gallery Management</h5>
                                  <p class="card-text">
                                      Add, edit, or remove images from your gallery section.
                                  </p>
                                  <a href="{{ route('gallery.index') }}" class="btn btn-sm btn-primary">Learn More</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 mb-4">
                          <div class="card h-100">
                              <div class="card-body">
                                  <h5 class="card-title">Need Help?</h5>
                                  <p class="card-text">
                                      If you have any questions or need assistance, please refer to the documentation.
                                  </p>
                                  <a href="" class="btn btn-sm btn-primary">View Documentation</a>
                              </div>
                          </div>
                      </div>
                      <!-- Added Team Management Help Card -->
                      <div class="col-md-4 mb-4">
                          <div class="card h-100">
                              <div class="card-body">
                                  <h5 class="card-title">Team Management</h5>
                                  <p class="card-text">
                                      Add, edit, or remove team members from your team showcase section.
                                  </p>
                                  <a href="{{ route('teams.index') }}" class="btn btn-sm btn-primary">Learn More</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection

@push('scripts')
<script>
  $(document).ready(function() {
    // Your custom JavaScript can go here
  });
</script>
@endpush