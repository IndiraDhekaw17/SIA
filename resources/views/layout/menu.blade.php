              <li class="nav-item">
                <a href="{{ url('/home') }}" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt" style="color: white;"></i>
                  <p class="text-light">
                    Dashboard
                  </p>
                </a>
              </li>

              @if ($user->level == 1)
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-money-bill" style="color: white;"></i>
                  <p class="text-light">
                    Pencatatan
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/akuns/index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p class="text-light">Akun</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/kliens/index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p class="text-light">Data Klien</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book-open" style="color: white;"></i>
                  <p class="text-light">
                    Transaksi
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/penerimaans/index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p class="text-light">Penerimaan Kas atau Bank</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/pengeluarans/index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p class="text-light">Pengeluaran Kas atau Bank</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/memorials/index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p class="text-light">Jurnal Memorial</p>
                    </a>
                  <li class="nav-item">
                    <a href="{{ url('/penutups/index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p class="text-light">Jurnal Penutup</p>
                    </a>
                  </li>
                </ul>
              </li>

              @elseif($user->level == 3)
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-money-bill" style="color: white;"></i>
                  <p class="text-light">
                    Pencatatan
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/akuns/index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p class="text-light">Akun</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/kliens/index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p class="text-light">Data Klien</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book-open" style="color: white;"></i>
                  <p class="text-light">
                    Transaksi
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/penerimaans/index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p class="text-light">Penerimaan Kas atau Bank</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/pengeluarans/index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p class="text-light">Pengeluaran Kas atau Bank</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/memorials/index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p class="text-light">Jurnal Memorial</p>
                    </a>
                  <li class="nav-item">
                    <a href="{{ url('/penutups/index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p class="text-light">Jurnal Penutup</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{ url('/bukubesar/index') }}" class="nav-link">
                  <i class="nav-icon fas fa-book" style="color: white;"></i>
                  <p class="text-light">
                    Buku Besar
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-bookmark" style="color: white;"></i>
                  <p class="text-light">
                    Laporan
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/keuangans/index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p class="text-light">Posisi Keuangan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/labarugis/index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p class="text-light">Laba Rugi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/perubahanmodal/index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p class="text-light">Perubahan Modal</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/aruskass/index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p class="text-light">Arus Kas</p>
                    </a>
                  </li>
                </ul>
                @endif