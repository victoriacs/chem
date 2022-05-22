<ul class="list-group mb-3 border-top color-border-muted">
    @forelse($formulasFav as $item)
        <li id="{{ $item->formula->id }}" class="col-12 d-flex width-full py-4 border-bottom color-border-muted">
            <div class="col-10 col-lg-9">
                <div class="d-inline-block mb-1 d-flex align-items-center">
                    <span class="h3"><a
                            href={{ route('formulas.show', $item->formula->url) }}>
                            {{ $item->formula->nombre_comun }}
                        </a></span>
                    <span
                        class="badge rounded-pill bg-secondary ml-1 mb-1">{{ $item->formula->categoria->nombre }}</span>
                        @auth
                        <div>
                            @if ($item->formula->isFavorited($item->formula->id))
                                <div class="ms-3"><a id="{{ $item->formula->id }}"
                                        class="unfav"><i class="bi bi-heart-fill"></i></a>
                                </div>
                            @else
                                <div class="ms-3"><a id="{{ $item->formula->id }}"
                                        class="fav"><i class="bi bi-heart"></i></a></div>
                            @endif
                        </div>
                    @endauth
              </div>
                <div>
                    <p class="text-truncate mb-2">
                        {{ $item->formula->descripcion }}
                    </p>
                </div>
                <div class="f6 color-fg-muted mt-2">
                    Creado por: <a href="{{ route('perfil.index', $item->user->user) }}">
                        {{ $item->formula->user->user }}</a>
                </div>
            </div>
        </li>
</ul>
@empty
<div id="empty" class="d-flex justify-content-center">
    @if ($user == Auth::user())
        <h4>Aún no has creado fórmulas.</h4>
    @else
        <h4>{{ $user->user }} no ha creado fórmulas.</h4>
    @endif
</div>
@endforelse
