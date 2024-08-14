@php
$no=1;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Osis</title>
</head>
<body>

<a href="/input"> <button class="mt-3 mb-3 ms-1 btn btn-outline btn-primary">Add</button></a>

    {{-- navbar s --}}

    <div class="navbar bg-accent">
        <div class="flex-1">
          <a class="btn btn-ghost text-black text-xl">OSIS</a>
        </div>
        <div class="flex-none">
          <button class="btn btn-square btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
          </button>
        </div>
      </div>
    {{-- navbar e --}}

       
        <div class="overflow-x-auto">
            <table class="table table-zebra">
              <!-- head -->
              <thead>
                <tr>
                  <th></th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
             
              <tbody>
                <!-- row 1 -->
                @foreach ($osis as $o)
                <tr>
                  <th>{{ $no }}</th>
                  <td>{{ $o->nama }}</td>
                  <td class="">{{ $o->jabatan }}</td>
                  <td class="flex">
                    <a href="/edit/{{ $o->id }}"><button class="btn btn-outline btn-accent mr-2">Edit</button></a>

                    <form action="/update/{{ $o->id }}" method="POST">
                      @csrf
                      @method('delete')
                      <button class="btn btn-outline btn-warning">Delete</button>
                    </form>
                  </td>
                </tr>

                @php
                  $no++;
              @endphp

                @endforeach
              </tbody>
            </table>
          </div>
        
</body>
</html>