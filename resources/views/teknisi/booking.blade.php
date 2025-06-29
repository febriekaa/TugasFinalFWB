<div class="table-responsive">
    <table class="table table-hover table-bordered table-striped align-middle shadow-sm">
        <thead class="table-primary text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Waktu Pemesanan</th>
                <th scope="col">Cabang</th>
                <th scope="col">Layanan</th>
                <th scope="col">Teknisi</th>
                <th scope="col">Metode Layanan</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($riwayatBooking as $i => $booking)
            <tr>
                <td class="text-center">{{ $riwayatBooking->firstItem() + $i }}</td>
                <td>{{ $booking->created_at->format('d-m-Y H:i') }}</td>
                <td>{{ $booking->cabang->nama }}</td>
                <td>{{ $booking->layanan->nama }}</td>
                <td>{{ $booking->teknisi ? $booking->teknisi->name : 'Tidak ada' }}</td>
                <td>{{ ucfirst($booking->metode_layanan) }}</td>
                <td>{{ $booking->lokasi ?? '-' }}</td>
                <td>
                    <form action="{{ route('pemesanan.updateStatus', $booking->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PUT')
                        <select name="status" class="form-select form-select-sm border-primary" onchange="this.form.submit()">
                            <option value="menunggu" {{ $booking->status == 'menunggu' ? 'selected' : '' }}>Menunggu</option>
                            <option value="diterima" {{ $booking->status == 'diterima' ? 'selected' : '' }}>Diterima</option>
                            <option value="selesai" {{ $booking->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                            <option value="dibatalkan" {{ $booking->status == 'dibatalkan' ? 'selected' : '' }}>Dibatalkan</option>
                        </select>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $riwayatBooking->links('pagination::bootstrap-5') }}
    </div>
</div>