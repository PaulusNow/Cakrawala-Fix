    <div class="cpesan">{{ $content }}</div>
    <div class="subcpesan">
      <ul class="confirm">
        <li class={{ Request::is('/pesan') ? 'activee' : ''  }}>Pilih dan Jadwal Kendaraan</li>
        <li class={{ Request::is('/pesan-konfirmasi') ? 'activee' : '' }}>Konfirmasi Pesanan</li>
        <li class={{ $title === 'Pembayaran' ? 'activee' : '' }}>Pembayaran</li>
      </ul>
    </div>