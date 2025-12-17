@extends('base')
@section('title','Pegawai')
@section('menupegawai', 'underline decoration-4 underline-offset-7')
@section('content')
    <section class="p-4 bg-white rounded-lg min-h-[50vh]">
        <h1 class="text-3xl font-bold text-[#C0392B] mb-6 text-center">Edit Pegawai</h1>
        <div class="mx-auto max-w-screen-xl">
            <form action="{{ route('pegawai.update', ['id' => $data->id]) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Pegawai</label>
                    <input type="text" name="nama" value="{{ $data->nama }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" value="{{ $data->email }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Pekerjaan</label>
                    <select name="pekerjaan_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
                        <option value="">Pilih Pekerjaan</option>
                        @foreach($pekerjaan as $p)
                            <option value="{{ $p->id }}" {{ $data->pekerjaan_id == $p->id ? 'selected' : '' }}>{{ $p->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Gender</label>
                    <select name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
                        <option value="">Pilih Gender</option>
                        <option value="male" {{ $data->gender == 'male' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="female" {{ $data->gender == 'female' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div>
                    <label class="flex items-center">
                        <input type="checkbox" name="is_active" value="1" {{ $data->is_active ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <span class="ml-2 text-sm font-medium text-gray-700">Aktif</span>
                    </label>
                </div>
                <div class="flex justify-end gap-2">
                    <a href="{{ route('pegawai.index') }}" class="rounded-md border border-gray-300 bg-white px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 cursor-pointer">Batal</a>
                    <button type="submit" class="rounded-md bg-green-600 px-4 py-2 text-sm text-white hover:bg-green-700 cursor-pointer">Simpan</button>
                </div>
            </form>
        </div>
    </section>
@endsection
