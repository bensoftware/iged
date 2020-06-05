<!-- Menu desktop -->
<nav class="menu-desktop">
  <a class="logo-stick" href="{{url('/')}}">
    <img src="{{URL::asset('public/images/icon.jpg')}}" alt="LOGO">
  </a>
  <ul class="main-menu">
    <li class="main-menu-active">
      <a href="{{url('/')}}">ACCEUIL</a>
    </li>
    <li>
      <a href="#">IGED</a>
      <ul class="sub-menu">
        <li><a href="{{url('/presentation')}}">PRESENTATION</a></li>
        <li><a href="{{url('/')}}">ORGANISATION</a></li>
        <li><a href="{{url('/news')}}">NEWS</a></li>
        <li><a href="{{url('/')}}">MEDIA</a></li>
      </ul>
    </li>
    <li>
							<a href="#">DIPLÔME</a>
							<ul class="sub-menu">
								<li><a href="">NATIONAUX</a>
									<ul class="sub-menu">
										<li><a href="{{url('/diplome/{$cap}')}}">CAP </a></li>
										<li><a href="">BT</a></li>
									</ul>
								</li>
								<li><a href="">INTERNATIONAUX</a>
									<ul class="sub-menu">
										<li><a href="">BTS </a></li>
										<li><a href="">VAE</a></li>
									</ul>
								</li>
							</ul>
						</li>

						<li>
							<a href="#">SESSION DE FORMATION</a>
							<ul class="sub-menu">
								<li><a href="">LANGUE</a>
									<ul class="sub-menu">
										<li><a href="">ANGLAIS </a></li>
										<li><a href="">ARABE</a></li>
										<li><a href="">FRANÇAIS</a></li>
									</ul>
								</li>
								<li><a href="">INFORMATIQUE</a>
									<ul class="sub-menu">
										<li><a href="">BUREAUTIQUE </a></li>
									</ul>
								</li>
							</ul>
						</li>

    <li>
      <a href="#">INFO</a>
      <ul class="sub-menu">
        <li><a href="{{url('/about')}}">A PROPOS DE NOUS </a></li>
        <li><a href="{{url('/contact')}}">CONTACT</a></li>
      </ul>
    </li>
  </ul>
</nav>
