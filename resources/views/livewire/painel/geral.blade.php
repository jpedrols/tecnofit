<div class="row">

    <div wire:loading style="position: absolute; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, .35); text-align: center">
        <div class="spinner-border text-primary" role="status" style="margin-top: 20%;">
        </div>
    </div>

    @if(session()->get("logado") == 'nao' || !session()->get("logado")) 
        <div class="col-sm-6 text-black">

            <div class="px-5 ms-xl-4">
                <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                <span class="h1 fw-bold mb-0" style="display: block; margin-top: 200px;">
                    <svg style="max-width: 40%;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.2" id="" x="0px" y="0px" viewBox="0 0 130 44" overflow="visible" xml:space="preserve" class="custom-logo menu-image replaced-svg svg-replaced-0"> <g> <path fill="#3155C7" d="M35.7,26.4h-4v-1.2H41v1.2h-4V37h-1.3V26.4z"></path> <path fill="#3155C7" d="M44.9,25.1h8.6v1.2h-7.2v4.1h6.5v1.2h-6.5v4.2h7.3V37h-8.6V25.1z"></path> <path fill="#3155C7" d="M63,37.2c-0.9,0-1.6-0.2-2.4-0.5c-0.7-0.3-1.3-0.7-1.9-1.3c-0.5-0.5-0.9-1.2-1.2-1.9 c-0.3-0.7-0.4-1.5-0.4-2.4v0c0-0.8,0.1-1.6,0.4-2.4c0.3-0.7,0.7-1.4,1.2-2c0.5-0.6,1.2-1,1.9-1.3c0.7-0.3,1.5-0.5,2.4-0.5 c0.5,0,1,0,1.5,0.1c0.4,0.1,0.8,0.2,1.2,0.4c0.4,0.2,0.7,0.4,1,0.6c0.3,0.2,0.6,0.5,0.9,0.8l-0.9,1c-0.5-0.5-1.1-0.9-1.6-1.2 c-0.6-0.3-1.3-0.5-2.1-0.5c-0.7,0-1.3,0.1-1.8,0.4c-0.6,0.2-1,0.6-1.5,1c-0.4,0.4-0.7,1-1,1.5c-0.2,0.6-0.3,1.2-0.3,1.9v0 c0,0.7,0.1,1.3,0.3,1.9c0.2,0.6,0.6,1.1,1,1.5c0.4,0.4,0.9,0.8,1.5,1c0.6,0.3,1.2,0.4,1.8,0.4c0.8,0,1.5-0.1,2.1-0.4 c0.6-0.3,1.2-0.7,1.7-1.3l0.9,0.9c-0.3,0.3-0.6,0.6-1,0.9c-0.3,0.3-0.7,0.5-1.1,0.7c-0.4,0.2-0.8,0.3-1.2,0.4 C64,37.1,63.5,37.2,63,37.2z"></path> <path fill="#3155C7" d="M71.4,25.1h1.3l7.5,9.5v-9.5h1.3V37h-1.1l-7.6-9.7V37h-1.3V25.1z"></path> <path fill="#3155C7" d="M91.6,37.2c-0.9,0-1.7-0.2-2.5-0.5c-0.7-0.3-1.4-0.8-1.9-1.3c-0.5-0.6-0.9-1.2-1.2-1.9 c-0.3-0.7-0.4-1.5-0.4-2.3v0c0-0.8,0.1-1.6,0.4-2.3c0.3-0.7,0.7-1.4,1.2-2c0.5-0.6,1.2-1,1.9-1.3c0.7-0.3,1.6-0.5,2.5-0.5 c0.9,0,1.7,0.2,2.5,0.5c0.7,0.3,1.4,0.8,1.9,1.3c0.5,0.6,0.9,1.2,1.2,1.9c0.3,0.7,0.4,1.5,0.4,2.3c0,0,0,0,0,0 c0,0.8-0.1,1.6-0.4,2.3c-0.3,0.7-0.7,1.4-1.2,2c-0.5,0.6-1.2,1-1.9,1.3C93.3,37,92.5,37.2,91.6,37.2z M91.6,35.9 c0.7,0,1.3-0.1,1.9-0.4c0.6-0.3,1.1-0.6,1.5-1c0.4-0.4,0.7-1,1-1.5c0.2-0.6,0.3-1.2,0.3-1.9v0c0-0.7-0.1-1.3-0.3-1.9 c-0.2-0.6-0.6-1.1-1-1.5c-0.4-0.4-0.9-0.8-1.5-1c-0.6-0.3-1.2-0.4-1.9-0.4c-0.7,0-1.3,0.1-1.9,0.4c-0.6,0.3-1.1,0.6-1.5,1 c-0.4,0.4-0.7,1-1,1.5C87.1,29.7,87,30.3,87,31v0c0,0.7,0.1,1.3,0.3,1.9c0.2,0.6,0.6,1.1,1,1.5c0.4,0.4,0.9,0.8,1.5,1 C90.3,35.8,90.9,35.9,91.6,35.9z"></path> <path fill="#3155C7" d="M101.6,25.1h9v2.3h-6.4V30h5.6v2.4h-5.6V37h-2.6V25.1z"></path> <path fill="#3155C7" d="M114.1,25.1h2.6V37h-2.6V25.1z"></path> <path fill="#3155C7" d="M123.8,27.5h-3.6v-2.4h9.8v2.4h-3.6V37h-2.6V27.5z"></path> <polygon fill="#3155C7" points="26.8,6.4 26.8,12.8 17.6,18.1 17.6,44 22.6,41.1 22.6,21 31.7,15.7 31.7,9.3 "></polygon> <polygon fill="#3155C7" points="5,6.4 0,9.3 0,15.7 9.2,21 9.2,41.1 14.1,44 14.1,18.1 5,12.8 "></polygon> <path fill="#3155C7" d="M22.3,6.4c0-3.6-2.9-6.4-6.4-6.4S9.4,2.9,9.4,6.4c0,3.6,2.9,6.4,6.4,6.4S22.3,10,22.3,6.4z"></path> <polygon fill="#0242B9" points="26.8,12.8 17.6,18.1 22.6,21 31.7,15.7 "></polygon> <polygon fill="#0242B9" points="5,12.8 14.1,18.1 9.2,21 0,15.7 "></polygon> </g> </svg>
                </span>
            </div>

            <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                <form wire:submit.prevent="logar" style="width: 23rem;">
        
                    <div class="form-outline mb-4">
                        <label>Usuário:</label>
                        <input wire:model.defer="usuario" type="text" class="form-control form-control-md" required placeholder="admin"/>
                    </div>
        
                    <div class="form-outline mb-4">
                        <label>Senha:</label>
                        <input wire:model.defer="senha" type="password" class="form-control form-control-md" required placeholder="admin" />
                    </div>
        
                    <div class="pt-1 mb-4">
                        <button class="btn btn-info btn-lg btn-block text-white" type="submit">Acessar</button>
                    </div>
        
                </form>
            </div>

        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
            <img src="{{ asset('fundo_login.jpg') }}" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
    @else 
        <div style="col-sm-12">
            <div class="col-sm-12 text-center">
                <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                <span class="h1 fw-bold mb-0" style="display: block; margin-top: 10px;">
                    <svg style="max-width: 20%;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.2" id="" x="0px" y="0px" viewBox="0 0 130 44" overflow="visible" xml:space="preserve" class="custom-logo menu-image replaced-svg svg-replaced-0"> <g> <path fill="#3155C7" d="M35.7,26.4h-4v-1.2H41v1.2h-4V37h-1.3V26.4z"></path> <path fill="#3155C7" d="M44.9,25.1h8.6v1.2h-7.2v4.1h6.5v1.2h-6.5v4.2h7.3V37h-8.6V25.1z"></path> <path fill="#3155C7" d="M63,37.2c-0.9,0-1.6-0.2-2.4-0.5c-0.7-0.3-1.3-0.7-1.9-1.3c-0.5-0.5-0.9-1.2-1.2-1.9 c-0.3-0.7-0.4-1.5-0.4-2.4v0c0-0.8,0.1-1.6,0.4-2.4c0.3-0.7,0.7-1.4,1.2-2c0.5-0.6,1.2-1,1.9-1.3c0.7-0.3,1.5-0.5,2.4-0.5 c0.5,0,1,0,1.5,0.1c0.4,0.1,0.8,0.2,1.2,0.4c0.4,0.2,0.7,0.4,1,0.6c0.3,0.2,0.6,0.5,0.9,0.8l-0.9,1c-0.5-0.5-1.1-0.9-1.6-1.2 c-0.6-0.3-1.3-0.5-2.1-0.5c-0.7,0-1.3,0.1-1.8,0.4c-0.6,0.2-1,0.6-1.5,1c-0.4,0.4-0.7,1-1,1.5c-0.2,0.6-0.3,1.2-0.3,1.9v0 c0,0.7,0.1,1.3,0.3,1.9c0.2,0.6,0.6,1.1,1,1.5c0.4,0.4,0.9,0.8,1.5,1c0.6,0.3,1.2,0.4,1.8,0.4c0.8,0,1.5-0.1,2.1-0.4 c0.6-0.3,1.2-0.7,1.7-1.3l0.9,0.9c-0.3,0.3-0.6,0.6-1,0.9c-0.3,0.3-0.7,0.5-1.1,0.7c-0.4,0.2-0.8,0.3-1.2,0.4 C64,37.1,63.5,37.2,63,37.2z"></path> <path fill="#3155C7" d="M71.4,25.1h1.3l7.5,9.5v-9.5h1.3V37h-1.1l-7.6-9.7V37h-1.3V25.1z"></path> <path fill="#3155C7" d="M91.6,37.2c-0.9,0-1.7-0.2-2.5-0.5c-0.7-0.3-1.4-0.8-1.9-1.3c-0.5-0.6-0.9-1.2-1.2-1.9 c-0.3-0.7-0.4-1.5-0.4-2.3v0c0-0.8,0.1-1.6,0.4-2.3c0.3-0.7,0.7-1.4,1.2-2c0.5-0.6,1.2-1,1.9-1.3c0.7-0.3,1.6-0.5,2.5-0.5 c0.9,0,1.7,0.2,2.5,0.5c0.7,0.3,1.4,0.8,1.9,1.3c0.5,0.6,0.9,1.2,1.2,1.9c0.3,0.7,0.4,1.5,0.4,2.3c0,0,0,0,0,0 c0,0.8-0.1,1.6-0.4,2.3c-0.3,0.7-0.7,1.4-1.2,2c-0.5,0.6-1.2,1-1.9,1.3C93.3,37,92.5,37.2,91.6,37.2z M91.6,35.9 c0.7,0,1.3-0.1,1.9-0.4c0.6-0.3,1.1-0.6,1.5-1c0.4-0.4,0.7-1,1-1.5c0.2-0.6,0.3-1.2,0.3-1.9v0c0-0.7-0.1-1.3-0.3-1.9 c-0.2-0.6-0.6-1.1-1-1.5c-0.4-0.4-0.9-0.8-1.5-1c-0.6-0.3-1.2-0.4-1.9-0.4c-0.7,0-1.3,0.1-1.9,0.4c-0.6,0.3-1.1,0.6-1.5,1 c-0.4,0.4-0.7,1-1,1.5C87.1,29.7,87,30.3,87,31v0c0,0.7,0.1,1.3,0.3,1.9c0.2,0.6,0.6,1.1,1,1.5c0.4,0.4,0.9,0.8,1.5,1 C90.3,35.8,90.9,35.9,91.6,35.9z"></path> <path fill="#3155C7" d="M101.6,25.1h9v2.3h-6.4V30h5.6v2.4h-5.6V37h-2.6V25.1z"></path> <path fill="#3155C7" d="M114.1,25.1h2.6V37h-2.6V25.1z"></path> <path fill="#3155C7" d="M123.8,27.5h-3.6v-2.4h9.8v2.4h-3.6V37h-2.6V27.5z"></path> <polygon fill="#3155C7" points="26.8,6.4 26.8,12.8 17.6,18.1 17.6,44 22.6,41.1 22.6,21 31.7,15.7 31.7,9.3 "></polygon> <polygon fill="#3155C7" points="5,6.4 0,9.3 0,15.7 9.2,21 9.2,41.1 14.1,44 14.1,18.1 5,12.8 "></polygon> <path fill="#3155C7" d="M22.3,6.4c0-3.6-2.9-6.4-6.4-6.4S9.4,2.9,9.4,6.4c0,3.6,2.9,6.4,6.4,6.4S22.3,10,22.3,6.4z"></path> <polygon fill="#0242B9" points="26.8,12.8 17.6,18.1 22.6,21 31.7,15.7 "></polygon> <polygon fill="#0242B9" points="5,12.8 14.1,18.1 9.2,21 0,15.7 "></polygon> </g> </svg>
                </span>
            </div>

            <hr style="margin: 50px 0">

            <h3 class="text-center text-secondary">Rank por movimentos</h3>

            <div class="col-lg-10" style="margin: 30px auto;">
                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    @php
                        $ativo = 'active';
                    @endphp
                    @foreach($movimentos as $movimento)
                        <li class="nav-item">
                            <a class="nav-link {{ $ativo }}" data-bs-toggle="tab" href="#tab{{ $movimento->id }}" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">{{ $movimento->name }}</span> 
                            </a>
                        </li>
                        @php
                            $ativo = "";
                        @endphp
                    @endforeach
                </ul>
                <div class="tab-content p-3 text-muted border border-secondary">
                    @php
                        $ativo = 'active';
                    @endphp
                    @foreach($movimentos as $movimento)
                        <div class="tab-pane {{ $ativo }}" id="tab{{ $movimento->id }}" role="tabpanel" style="padding: 20px;">
                            <div style="display: flex; justify-content:space-between">
                                @php
                                    $i = 0;
                                    $ultimo_registro = "";
                                    $response = Http::get('tecnofit.test/api/rank_por_movimento/'.$movimento->id);
                                    $collection = json_decode($response);
                                    $rank_por_movimento = collect($collection)->all();
                                @endphp
                                @if($rank_por_movimento)
                                    @foreach($rank_por_movimento as $rankeado)
                                        @php
                                            if($ultimo_registro != $rankeado->value) { $i++; }
                                        @endphp
                                        <div class="card" style="width: 18rem;">
                                            <div class="avatar-sm mx-auto mb-4">
                                                <span class="rounded-circle bg-success bg-soft font-size-16 text-white" style="padding: 15px 20px">{{ $i }}º</span>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $rankeado->name }}</h5>
                                                <p class="card-text">
                                                    Peso {{ $rankeado->value }} <br>
                                                    {{ $rankeado->date }}
                                                </p>
                                            </div>
                                        </div>
                                        @php
                                            $ultimo_registro = $rankeado->value;
                                        @endphp
                                    @endforeach
                                @else 
                                    Este movimento não possui dados
                                @endif
                                @php
                                    $ativo = "";
                                @endphp
                            </div>

                            <br>

                            <pre>
                                <code>
                                    tecnofit.test/api/rank_por_movimento/{id}'
                                </code>
                            </pre>

                            <pre>
                                <code>
                                    {{ var_dump($rank_por_movimento) }}
                                </code>
                            </pre>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        @push('scripts_dash')
        @endpush
    @endif
</div>