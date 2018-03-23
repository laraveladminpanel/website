<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <span class="copyright">Copyright &copy; Laravel Admin Panel {{ date('Y') }}</span>
      </div>
      @php
      /*
      <div class="col-md-4">
        <ul class="list-inline social-buttons">
          <li class="list-inline-item">
            <a href="#">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <i class="fa fa-linkedin"></i>
            </a>
          </li>
        </ul>
      </div>
      */
      @endphp
      <div class="col-md-6">
        <ul class="list-inline quicklinks">
          @foreach($items as $menu_item)
              <li class="list-inline-item">
                <a href="{{ $menu_item->link() }}" target="{{ $menu_item->target }}">{{ $menu_item->title }}</a>
              </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</footer>
