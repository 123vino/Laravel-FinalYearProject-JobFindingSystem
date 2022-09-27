<div class="row mb-2">
    <div class="col-sm-6">
      
      @auth
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item {{ request()->is('user-detail') ? 'active' : '' }}"><a
                      href="{{route('user-detail.index')}}">Heading</a></li>
              <li class="breadcrumb-item {{ request()->is('education') ? 'active' : '' }}"><a
                      href="{{route('education.index')}}">Education</a></li>
              <li class="breadcrumb-item {{ request()->is('experience') ? 'active' : '' }}"><a
                      href="{{route('experience.index')}}">Work History</a></li>
              <li class="breadcrumb-item {{ request()->is('skill') ? 'active' : '' }}"><a
                      href="{{route('skill.index')}}">Skills</a></li>

          </ol>
      </nav>
      @endauth
    </div><!-- /.col -->
   
  </div><!-- /.row -->