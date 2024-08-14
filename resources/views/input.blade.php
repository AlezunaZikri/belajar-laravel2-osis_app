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

            <div class="hero min-h-screen bg-base-200">
                <div class="hero-content flex-col lg:flex-row-reverse">
                  <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                    
                    <form class="card-body" action="/store" method="POST">
                        @csrf
                      <div class="form-control">
                        <label class="label">
                          <span class="label-text text-xl">Nama</span>
                        </label>
                        <input type="text" name="nama" placeholder="nama" class="input input-bordered" required />
                      </div>
                      <div class="form-control">
                        <label class="label">
                          <span class="label-text text-xl">Jabatan</span>
                        </label>
                        <input type="text" name="jabatan" placeholder="jabatan" class="input input-bordered" required />
                      </div>
                      <div class="form-control mt-6">
                        <button class="btn btn-accent" type="submit">Login</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
         

</body>
</html>