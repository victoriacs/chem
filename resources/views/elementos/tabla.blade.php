@extends('plantilla')
<link href="{{ asset('css/tabla.css') }}" rel="stylesheet" type="text/css" >

@section('title','Tabla periódica')

@section('content')
    <div class="wrapper">
        <input class="category-toggle" type="radio" id="alkali-metals" name="categories" />
        <input class="category-cancel" type="radio" id="cancel" name="categories" />
        <input class="category-toggle" type="radio" id="alkaline-earth-metals" name="categories" />
        <input class="category-cancel" type="radio" id="cancel" name="categories" />
        <input class="category-toggle" type="radio" id="lanthanoids" name="categories" />
        <input class="category-cancel" type="radio" id="cancel" name="categories" />
        <input class="category-toggle" type="radio" id="actinoids" name="categories" />
        <input class="category-cancel" type="radio" id="cancel" name="categories" />
        <input class="category-toggle" type="radio" id="transition-metals" name="categories" />
        <input class="category-cancel" type="radio" id="cancel" name="categories" />
        <input class="category-toggle" type="radio" id="post-transition-metals" name="categories" />
        <input class="category-cancel" type="radio" id="cancel" name="categories" />
        <input class="category-toggle" type="radio" id="metalloids" name="categories" />
        <input class="category-cancel" type="radio" id="cancel" name="categories" />
        <input class="category-toggle" type="radio" id="other-nonmetals" name="categories" />
        <input class="category-cancel" type="radio" id="cancel" name="categories" />
        <input class="category-toggle" type="radio" id="noble-gasses" name="categories" />
        <input class="category-cancel" type="radio" id="cancel" name="categories" />
        <input class="category-toggle" type="radio" id="unknown" name="categories" />
        <input class="category-cancel" type="radio" id="cancel" name="categories" />
        <div class="periodic-table">
            <div class="element other-nonmetal c1 r1">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">1</div>
                    <div class="label">
                        <div class="symbol">H</div>
                        <div class="name">Hidrógeno</div>
                    </div>
                    <div class="atomic-mass">1.008</div>
                    <ul class="atomic-weight">
                        <li>1</li>
                    </ul>
                </div>
            </div>
            <div class="element noble-gas c18 r1">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">2</div>
                    <div class="label">
                        <div class="symbol">He</div>
                        <div class="name">Helio</div>
                    </div>
                    <div class="atomic-mass">4.0026</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element alkali-metal c1 r2">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">3</div>
                    <div class="label">
                        <div class="symbol">Li</div>
                        <div class="name">Litio</div>
                    </div>
                    <div class="atomic-mass">6.94</div>
                    <ul class="atomic-weight">
                        <li>3</li>
                    </ul>
                </div>
            </div>
            <div class="element alkaline-earth-metal c2 r2">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">4</div>
                    <div class="label">
                        <div class="symbol">Be</div>
                        <div class="name">Berilio</div>
                    </div>
                    <div class="atomic-mass">9.0122</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element metalloid c13 r2">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">5</div>
                    <div class="label">
                        <div class="symbol">B</div>
                        <div class="name">Boron</div>
                    </div>
                    <div class="atomic-mass">10.81</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>3</li>
                    </ul>
                </div>
            </div>
            <div class="element other-nonmetal c14 r2">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">6</div>
                    <div class="label">
                        <div class="symbol">C</div>
                        <div class="name">Carbono</div>
                    </div>
                    <div class="atomic-mass">12.011</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>4</li>
                    </ul>
                </div>
            </div>
            <div class="element other-nonmetal c15 r2">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">7</div>
                    <div class="label">
                        <div class="symbol">N</div>
                        <div class="name">Nitrógeno</div>
                    </div>
                    <div class="atomic-mass">14.007</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>5</li>
                    </ul>
                </div>
            </div>
            <div class="element other-nonmetal c16 r2">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">8</div>
                    <div class="label">
                        <div class="symbol">O</div>
                        <div class="name">Oxigeno</div>
                    </div>
                    <div class="atomic-mass">15.999</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>6</li>
                    </ul>
                </div>
            </div>
            <div class="element other-nonmetal c17 r2">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">9</div>
                    <div class="label">
                        <div class="symbol">F</div>
                        <div class="name">Flúor</div>
                    </div>
                    <div class="atomic-mass">18.998</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>7</li>
                    </ul>
                </div>
            </div>
            <div class="element noble-gas c18 r2">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">10</div>
                    <div class="label">
                        <div class="symbol">Ne</div>
                        <div class="name">Neón</div>
                    </div>
                    <div class="atomic-mass">20.18</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                    </ul>
                </div>
            </div>
            <div class="element alkali-metal c1 r3">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">11</div>
                    <div class="label">
                        <div class="symbol">Na</div>
                        <div class="name">Sodio</div>
                    </div>
                    <div class="atomic-mass">22.99</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>1</li>
                    </ul>
                </div>
            </div>
            <div class="element alkaline-earth-metal c2 r3">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">12</div>
                    <div class="label">
                        <div class="symbol">Mg</div>
                        <div class="name">Magnesio</div>
                    </div>
                    <div class="atomic-mass">24.305</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element post-transition-metal c13 r3">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">13</div>
                    <div class="label">
                        <div class="symbol">Al</div>
                        <div class="name">Aluminio</div>
                    </div>
                    <div class="atomic-mass">26.982</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>3</li>
                    </ul>
                </div>
            </div>
            <div class="element metalloid c14 r3">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">14</div>
                    <div class="label">
                        <div class="symbol">Si</div>
                        <div class="name">Silicio</div>
                    </div>
                    <div class="atomic-mass">28.085</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>4</li>
                    </ul>
                </div>
            </div>
            <div class="element other-nonmetal c15 r3">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">15</div>
                    <div class="label">
                        <div class="symbol">P</div>
                        <div class="name">Fósforo</div>
                    </div>
                    <div class="atomic-mass">30.974</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>5</li>
                    </ul>
                </div>
            </div>
            <div class="element other-nonmetal c16 r3">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">16</div>
                    <div class="label">
                        <div class="symbol">S</div>
                        <div class="name">Azufre</div>
                    </div>
                    <div class="atomic-mass">32.06</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>6</li>
                    </ul>
                </div>
            </div>
            <div class="element other-nonmetal c17 r3">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">17</div>
                    <div class="label">
                        <div class="symbol">Cl</div>
                        <div class="name">Cloro</div>
                    </div>
                    <div class="atomic-mass">35.45</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>7</li>
                    </ul>
                </div>
            </div>
            <div class="element noble-gas c18 r3">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">18</div>
                    <div class="label">
                        <div class="symbol">Ar</div>
                        <div class="name">Argon</div>
                    </div>
                    <div class="atomic-mass">39.948</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>8</li>
                    </ul>
                </div>
            </div>
            <div class="element alkali-metal c1 r4">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">19</div>
                    <div class="label">
                        <div class="symbol">K</div>
                        <div class="name">Potasio</div>
                    </div>
                    <div class="atomic-mass">39.098</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>8</li>
                        <li>1</li>
                    </ul>
                </div>
            </div>
            <div class="element alkaline-earth-metal c2 r4">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">20</div>
                    <div class="label">
                        <div class="symbol">Ca</div>
                        <div class="name">Calcio</div>
                    </div>
                    <div class="atomic-mass">40.078</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c3 r4">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">21</div>
                    <div class="label">
                        <div class="symbol">Sc</div>
                        <div class="name">Escandio</div>
                    </div>
                    <div class="atomic-mass">44.956</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>9</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c4 r4">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">22</div>
                    <div class="label">
                        <div class="symbol">Ti</div>
                        <div class="name">Titanio</div>
                    </div>
                    <div class="atomic-mass">47.867</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>10</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c5 r4">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">23</div>
                    <div class="label">
                        <div class="symbol">V</div>
                        <div class="name">Vanadio</div>
                    </div>
                    <div class="atomic-mass">50.942</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>11</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c6 r4">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">24</div>
                    <div class="label">
                        <div class="symbol">Cr</div>
                        <div class="name">Cromo</div>
                    </div>
                    <div class="atomic-mass">51.996</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>13</li>
                        <li>1</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c7 r4">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">25</div>
                    <div class="label">
                        <div class="symbol">Mn</div>
                        <div class="name">Manganeso</div>
                    </div>
                    <div class="atomic-mass">54.938</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>13</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c8 r4">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">26</div>
                    <div class="label">
                        <div class="symbol">Fe</div>
                        <div class="name">Hierro</div>
                    </div>
                    <div class="atomic-mass">55.845</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>14</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c9 r4">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">27</div>
                    <div class="label">
                        <div class="symbol">Co</div>
                        <div class="name">Cobalto</div>
                    </div>
                    <div class="atomic-mass">58.933</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>15</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c10 r4">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">28</div>
                    <div class="label">
                        <div class="symbol">Ni</div>
                        <div class="name">Niquel</div>
                    </div>
                    <div class="atomic-mass">58.693</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>16</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c11 r4">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">29</div>
                    <div class="label">
                        <div class="symbol">Cu</div>
                        <div class="name">Cobre</div>
                    </div>
                    <div class="atomic-mass">63.546</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>1</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c12 r4">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">30</div>
                    <div class="label">
                        <div class="symbol">Zn</div>
                        <div class="name">Zinc</div>
                    </div>
                    <div class="atomic-mass">65.38</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element post-transition-metal c13 r4">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">31</div>
                    <div class="label">
                        <div class="symbol">Ga</div>
                        <div class="name">Galio</div>
                    </div>
                    <div class="atomic-mass">69.723</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>3</li>
                    </ul>
                </div>
            </div>
            <div class="element metalloid c14 r4">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">32</div>
                    <div class="label">
                        <div class="symbol">Ge</div>
                        <div class="name">Germanio</div>
                    </div>
                    <div class="atomic-mass">72.63</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>4</li>
                    </ul>
                </div>
            </div>
            <div class="element metalloid c15 r4">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">33</div>
                    <div class="label">
                        <div class="symbol">As</div>
                        <div class="name">Arsénico</div>
                    </div>
                    <div class="atomic-mass">74.922</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>5</li>
                    </ul>
                </div>
            </div>
            <div class="element other-nonmetal c16 r4">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">34</div>
                    <div class="label">
                        <div class="symbol">Se</div>
                        <div class="name">Selenio</div>
                    </div>
                    <div class="atomic-mass">78.971</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>6</li>
                    </ul>
                </div>
            </div>
            <div class="element other-nonmetal c17 r4">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">35</div>
                    <div class="label">
                        <div class="symbol">Br</div>
                        <div class="name">Bromo</div>
                    </div>
                    <div class="atomic-mass">79.904</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>7</li>
                    </ul>
                </div>
            </div>
            <div class="element noble-gas c18 r4">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">36</div>
                    <div class="label">
                        <div class="symbol">Kr</div>
                        <div class="name">Kriptón</div>
                    </div>
                    <div class="atomic-mass">83.798</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>8</li>
                    </ul>
                </div>
            </div>
            <div class="element alkali-metal c1 r5">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">37</div>
                    <div class="label">
                        <div class="symbol">Rb</div>
                        <div class="name">Rubidio</div>
                    </div>
                    <div class="atomic-mass">85.468</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>8</li>
                        <li>1</li>
                    </ul>
                </div>
            </div>
            <div class="element alkaline-earth-metal c2 r5">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">38</div>
                    <div class="label">
                        <div class="symbol">Sr</div>
                        <div class="name">Estroncio</div>
                    </div>
                    <div class="atomic-mass">87.62</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c3 r5">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">39</div>
                    <div class="label">
                        <div class="symbol">Y</div>
                        <div class="name">Itrio</div>
                    </div>
                    <div class="atomic-mass">88.906</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>9</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c4 r5">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">40</div>
                    <div class="label">
                        <div class="symbol">Zr</div>
                        <div class="name">Circonio</div>
                    </div>
                    <div class="atomic-mass">91.224</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>10</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c5 r5">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">41</div>
                    <div class="label">
                        <div class="symbol">Nb</div>
                        <div class="name">Niobio</div>
                    </div>
                    <div class="atomic-mass">92.906</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>12</li>
                        <li>1</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c6 r5">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">42</div>
                    <div class="label">
                        <div class="symbol">Mo</div>
                        <div class="name">Molibdeno</div>
                    </div>
                    <div class="atomic-mass">95.95</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>13</li>
                        <li>1</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c7 r5">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">43</div>
                    <div class="label">
                        <div class="symbol">Tc</div>
                        <div class="name">Tecnecio</div>
                    </div>
                    <div class="atomic-mass">(98)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>13</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c8 r5">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">44</div>
                    <div class="label">
                        <div class="symbol">Ru</div>
                        <div class="name">Rutenio</div>
                    </div>
                    <div class="atomic-mass">101.07</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>15</li>
                        <li>1</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c9 r5">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">45</div>
                    <div class="label">
                        <div class="symbol">Rh</div>
                        <div class="name">Rodio</div>
                    </div>
                    <div class="atomic-mass">102.91</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>16</li>
                        <li>1</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c10 r5">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">46</div>
                    <div class="label">
                        <div class="symbol">Pd</div>
                        <div class="name">Paladio</div>
                    </div>
                    <div class="atomic-mass">106.42</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>18</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c11 r5">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">47</div>
                    <div class="label">
                        <div class="symbol">Ag</div>
                        <div class="name">Plata</div>
                    </div>
                    <div class="atomic-mass">107.87</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>18</li>
                        <li>1</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c12 r5">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">48</div>
                    <div class="label">
                        <div class="symbol">Cd</div>
                        <div class="name">Cadmio</div>
                    </div>
                    <div class="atomic-mass">112.41</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>18</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element post-transition-metal c13 r5">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">49</div>
                    <div class="label">
                        <div class="symbol">In</div>
                        <div class="name">Indio</div>
                    </div>
                    <div class="atomic-mass">114.82</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>18</li>
                        <li>3</li>
                    </ul>
                </div>
            </div>
            <div class="element post-transition-metal c14 r5">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">50</div>
                    <div class="label">
                        <div class="symbol">Sn</div>
                        <div class="name">Estaño</div>
                    </div>
                    <div class="atomic-mass">204.38</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>18</li>
                        <li>4</li>
                    </ul>
                </div>
            </div>
            <div class="element metalloid c15 r5">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">51</div>
                    <div class="label">
                        <div class="symbol">Sb</div>
                        <div class="name">Antimonio</div>
                    </div>
                    <div class="atomic-mass">121.76</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>18</li>
                        <li>5</li>
                    </ul>
                </div>
            </div>
            <div class="element metalloid c16 r5">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">52</div>
                    <div class="label">
                        <div class="symbol">Te</div>
                        <div class="name">Telurio</div>
                    </div>
                    <div class="atomic-mass">127.6</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>18</li>
                        <li>6</li>
                    </ul>
                </div>
            </div>
            <div class="element other-nonmetal c17 r5">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">53</div>
                    <div class="label">
                        <div class="symbol">I</div>
                        <div class="name">Yodo</div>
                    </div>
                    <div class="atomic-mass">126.9</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>18</li>
                        <li>7</li>
                    </ul>
                </div>
            </div>
            <div class="element noble-gas c18 r5">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">54</div>
                    <div class="label">
                        <div class="symbol">Xe</div>
                        <div class="name">Xenón</div>
                    </div>
                    <div class="atomic-mass">131.29</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>18</li>
                        <li>8</li>
                    </ul>
                </div>
            </div>
            <div class="element alkali-metal c1 r6">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">55</div>
                    <div class="label">
                        <div class="symbol">Cs</div>
                        <div class="name">Cesio</div>
                    </div>
                    <div class="atomic-mass">132.91</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>18</li>
                        <li>8</li>
                        <li>1</li>
                    </ul>
                </div>
            </div>
            <div class="element alkaline-earth-metal c2 r6">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">56</div>
                    <div class="label">
                        <div class="symbol">Ba</div>
                        <div class="name">Bario</div>
                    </div>
                    <div class="atomic-mass">137.33</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>18</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element lanthanoid c4 r9">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">57</div>
                    <div class="label">
                        <div class="symbol">La</div>
                        <div class="name">Lantano</div>
                    </div>
                    <div class="atomic-mass">138.91</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>18</li>
                        <li>9</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element lanthanoid c5 r9">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">58</div>
                    <div class="label">
                        <div class="symbol">Ce</div>
                        <div class="name">Cerio</div>
                    </div>
                    <div class="atomic-mass">140.12</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>19</li>
                        <li>9</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element lanthanoid c6 r9">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">59</div>
                    <div class="label">
                        <div class="symbol">Pr</div>
                        <div class="name">Praseodimio</div>
                    </div>
                    <div class="atomic-mass">140.91</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>21</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element lanthanoid c7 r9">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">60</div>
                    <div class="label">
                        <div class="symbol">Nd</div>
                        <div class="name">Neodimio</div>
                    </div>
                    <div class="atomic-mass">144.24</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>22</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element lanthanoid c8 r9">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">61</div>
                    <div class="label">
                        <div class="symbol">Pm</div>
                        <div class="name">Prometio</div>
                    </div>
                    <div class="atomic-mass">144.24</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>23</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element lanthanoid c9 r9">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">62</div>
                    <div class="label">
                        <div class="symbol">Sm</div>
                        <div class="name">Samario</div>
                    </div>
                    <div class="atomic-mass">150.36</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>24</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element lanthanoid c10 r9">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">63</div>
                    <div class="label">
                        <div class="symbol">Eu</div>
                        <div class="name">Europio</div>
                    </div>
                    <div class="atomic-mass">151.96</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>25</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element lanthanoid c11 r9">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">64</div>
                    <div class="label">
                        <div class="symbol">Gd</div>
                        <div class="name">Gadolinio</div>
                    </div>
                    <div class="atomic-mass">157.25</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>25</li>
                        <li>9</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element lanthanoid c12 r9">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">65</div>
                    <div class="label">
                        <div class="symbol">Tb</div>
                        <div class="name">Terbio</div>
                    </div>
                    <div class="atomic-mass">158.93</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>27</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element lanthanoid c13 r9">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">66</div>
                    <div class="label">
                        <div class="symbol">Dy</div>
                        <div class="name">Diprosio</div>
                    </div>
                    <div class="atomic-mass">162.5</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>28</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element lanthanoid c14 r9">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">67</div>
                    <div class="label">
                        <div class="symbol">Ho</div>
                        <div class="name">Holmio</div>
                    </div>
                    <div class="atomic-mass">164.93</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>29</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element lanthanoid c15 r9">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">68</div>
                    <div class="label">
                        <div class="symbol">Er</div>
                        <div class="name">Erbio</div>
                    </div>
                    <div class="atomic-mass">167.26</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>30</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element lanthanoid c16 r9">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">69</div>
                    <div class="label">
                        <div class="symbol">Tm</div>
                        <div class="name">Tulio</div>
                    </div>
                    <div class="atomic-mass">168.93</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>31</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element lanthanoid c17 r9">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">70</div>
                    <div class="label">
                        <div class="symbol">Yb</div>
                        <div class="name">Iterbio</div>
                    </div>
                    <div class="atomic-mass">173.05</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element lanthanoid c18 r9">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">71</div>
                    <div class="label">
                        <div class="symbol">Lu</div>
                        <div class="name">Lutecio</div>
                    </div>
                    <div class="atomic-mass">174.97</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>9</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c4 r6">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">72</div>
                    <div class="label">
                        <div class="symbol">Hf</div>
                        <div class="name">Hafnio</div>
                    </div>
                    <div class="atomic-mass">178.49</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>10</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c5 r6">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">73</div>
                    <div class="label">
                        <div class="symbol">Ta</div>
                        <div class="name">Tántalo</div>
                    </div>
                    <div class="atomic-mass">180.95</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>11</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c6 r6">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">74</div>
                    <div class="label">
                        <div class="symbol">W</div>
                        <div class="name">Wolframio</div>
                    </div>
                    <div class="atomic-mass">183.84</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>12</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c7 r6">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">75</div>
                    <div class="label">
                        <div class="symbol">Re</div>
                        <div class="name">Renio</div>
                    </div>
                    <div class="atomic-mass">186.21</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>13</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c8 r6">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">76</div>
                    <div class="label">
                        <div class="symbol">Os</div>
                        <div class="name">Osmio</div>
                    </div>
                    <div class="atomic-mass">190.23</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>14</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c9 r6">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">77</div>
                    <div class="label">
                        <div class="symbol">Ir</div>
                        <div class="name">Iridio</div>
                    </div>
                    <div class="atomic-mass">192.22</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>15</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c10 r6">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">78</div>
                    <div class="label">
                        <div class="symbol">Pt</div>
                        <div class="name">Platino</div>
                    </div>
                    <div class="atomic-mass">195.08</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>17</li>
                        <li>1</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c11 r6">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">79</div>
                    <div class="label">
                        <div class="symbol">Au</div>
                        <div class="name">Oro</div>
                    </div>
                    <div class="atomic-mass">196.97</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>18</li>
                        <li>1</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c12 r6">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">80</div>
                    <div class="label">
                        <div class="symbol">Hg</div>
                        <div class="name">Mercurio</div>
                    </div>
                    <div class="atomic-mass">200.59</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>18</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element post-transition-metal c13 r6">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">81</div>
                    <div class="label">
                        <div class="symbol">Tl</div>
                        <div class="name">Talio</div>
                    </div>
                    <div class="atomic-mass">204.38</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>18</li>
                        <li>3</li>
                    </ul>
                </div>
            </div>
            <div class="element post-transition-metal c14 r6">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">82</div>
                    <div class="label">
                        <div class="symbol">Pb</div>
                        <div class="name">Plomo</div>
                    </div>
                    <div class="atomic-mass">207.2</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>18</li>
                        <li>4</li>
                    </ul>
                </div>
            </div>
            <div class="element post-transition-metal c15 r6">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">83</div>
                    <div class="label">
                        <div class="symbol">Bi</div>
                        <div class="name">Bismuto</div>
                    </div>
                    <div class="atomic-mass">208.98</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>18</li>
                        <li>5</li>
                    </ul>
                </div>
            </div>
            <div class="element post-transition-metal c16 r6">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">84</div>
                    <div class="label">
                        <div class="symbol">Po</div>
                        <div class="name">Plomo</div>
                    </div>
                    <div class="atomic-mass">(209)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>18</li>
                        <li>6</li>
                    </ul>
                </div>
            </div>
            <div class="element metalloid c17 r6">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">85</div>
                    <div class="label">
                        <div class="symbol">At</div>
                        <div class="name">Astato</div>
                    </div>
                    <div class="atomic-mass">(210)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>18</li>
                        <li>7</li>
                    </ul>
                </div>
            </div>
            <div class="element noble-gas c18 r6">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">86</div>
                    <div class="label">
                        <div class="symbol">Rn</div>
                        <div class="name">Radón</div>
                    </div>
                    <div class="atomic-mass">(222)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>18</li>
                        <li>8</li>
                    </ul>
                </div>
            </div>
            <div class="element alkali-metal c1 r7">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">87</div>
                    <div class="label">
                        <div class="symbol">Fr</div>
                        <div class="name">Francio</div>
                    </div>
                    <div class="atomic-mass">(223)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>18</li>
                        <li>8</li>
                        <li>1</li>
                    </ul>
                </div>
            </div>
            <div class="element alkaline-earth-metal c2 r7">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">88</div>
                    <div class="label">
                        <div class="symbol">Ra</div>
                        <div class="name">Radio</div>
                    </div>
                    <div class="atomic-mass">(226)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>18</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element actinoid c4 r10">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">89</div>
                    <div class="label">
                        <div class="symbol">Ac</div>
                        <div class="name">Actinio</div>
                    </div>
                    <div class="atomic-mass">(227)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>18</li>
                        <li>9</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element actinoid c5 r10">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">90</div>
                    <div class="label">
                        <div class="symbol">Th</div>
                        <div class="name">Torio</div>
                    </div>
                    <div class="atomic-mass">232.04</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>18</li>
                        <li>10</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element actinoid c6 r10">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">91</div>
                    <div class="label">
                        <div class="symbol">Pa</div>
                        <div class="name">Protactinio</div>
                    </div>
                    <div class="atomic-mass">231.04</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>20</li>
                        <li>9</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element actinoid c7 r10">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">92</div>
                    <div class="label">
                        <div class="symbol">U</div>
                        <div class="name">Uranio</div>
                    </div>
                    <div class="atomic-mass">238.03</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>21</li>
                        <li>9</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element actinoid c8 r10">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">93</div>
                    <div class="label">
                        <div class="symbol">Np</div>
                        <div class="name">Neptunio</div>
                    </div>
                    <div class="atomic-mass">(237)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>22</li>
                        <li>9</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element actinoid c9 r10">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">94</div>
                    <div class="label">
                        <div class="symbol">Pu</div>
                        <div class="name">Plutonio</div>
                    </div>
                    <div class="atomic-mass">(244)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>24</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element actinoid c10 r10">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">95</div>
                    <div class="label">
                        <div class="symbol">Am</div>
                        <div class="name">Americano</div>
                    </div>
                    <div class="atomic-mass">(243)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>25</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element actinoid c11 r10">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">96</div>
                    <div class="label">
                        <div class="symbol">Cm</div>
                        <div class="name">Curio</div>
                    </div>
                    <div class="atomic-mass">(247)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>25</li>
                        <li>9</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element actinoid c12 r10">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">97</div>
                    <div class="label">
                        <div class="symbol">Bk</div>
                        <div class="name">Berkelio</div>
                    </div>
                    <div class="atomic-mass">(247)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>27</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element actinoid c13 r10">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">98</div>
                    <div class="label">
                        <div class="symbol">Cf</div>
                        <div class="name">Californio</div>
                    </div>
                    <div class="atomic-mass">(251)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>28</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element actinoid c14 r10">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">99</div>
                    <div class="label">
                        <div class="symbol">Es</div>
                        <div class="name">Einstenio</div>
                    </div>
                    <div class="atomic-mass">(252)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>29</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element actinoid c15 r10">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">100</div>
                    <div class="label">
                        <div class="symbol">Fm</div>
                        <div class="name">Fermio</div>
                    </div>
                    <div class="atomic-mass">(257)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>30</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element actinoid c16 r10">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">101</div>
                    <div class="label">
                        <div class="symbol">Md</div>
                        <div class="name">Mendelevio</div>
                    </div>
                    <div class="atomic-mass">(258)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>31</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element actinoid c17 r10">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">102</div>
                    <div class="label">
                        <div class="symbol">No</div>
                        <div class="name">Nobelio</div>
                    </div>
                    <div class="atomic-mass">(259)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>32</li>
                        <li>8</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element actinoid c18 r10">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">103</div>
                    <div class="label">
                        <div class="symbol">Lr</div>
                        <div class="name">Lawrencio</div>
                    </div>
                    <div class="atomic-mass">(266)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>32</li>
                        <li>8</li>
                        <li>3</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c4 r7">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">104</div>
                    <div class="label">
                        <div class="symbol">Rf</div>
                        <div class="name">Rutherfordio</div>
                    </div>
                    <div class="atomic-mass">(267)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>32</li>
                        <li>10</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c5 r7">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">105</div>
                    <div class="label">
                        <div class="symbol">Db</div>
                        <div class="name">Dubnio</div>
                    </div>
                    <div class="atomic-mass">(268)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>32</li>
                        <li>11</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c6 r7">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">106</div>
                    <div class="label">
                        <div class="symbol">Sg</div>
                        <div class="name">Seaborgio</div>
                    </div>
                    <div class="atomic-mass">(269)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>32</li>
                        <li>12</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c7 r7">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">107</div>
                    <div class="label">
                        <div class="symbol">Bh</div>
                        <div class="name">Bohrio</div>
                    </div>
                    <div class="atomic-mass">(270)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>32</li>
                        <li>13</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c8 r7">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">108</div>
                    <div class="label">
                        <div class="symbol">Hs</div>
                        <div class="name">Hasio</div>
                    </div>
                    <div class="atomic-mass">(277)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>32</li>
                        <li>14</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element unknown c9 r7">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">109</div>
                    <div class="label">
                        <div class="symbol">Mt</div>
                        <div class="name">Meitnerio</div>
                    </div>
                    <div class="atomic-mass">(278)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>32</li>
                        <li>15</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element unknown c10 r7">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">110</div>
                    <div class="label">
                        <div class="symbol">Ds</div>
                        <div class="name">Darmstadtio</div>
                    </div>
                    <div class="atomic-mass">(281)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>32</li>
                        <li>17</li>
                        <li>1</li>
                    </ul>
                </div>
            </div>
            <div class="element unknown c11 r7">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">111</div>
                    <div class="label">
                        <div class="symbol">Rg</div>
                        <div class="name">Roentgenio</div>
                    </div>
                    <div class="atomic-mass">(282)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>32</li>
                        <li>17</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element transition-metal c12 r7">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">112</div>
                    <div class="label">
                        <div class="symbol">Cn</div>
                        <div class="name">Copernicio</div>
                    </div>
                    <div class="atomic-mass">(282)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>32</li>
                        <li>18</li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div class="element unknown c13 r7">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">113</div>
                    <div class="label">
                        <div class="symbol">Nh</div>
                        <div class="name">Nihonio</div>
                    </div>
                    <div class="atomic-mass">(286)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>32</li>
                        <li>18</li>
                        <li>3</li>
                    </ul>
                </div>
            </div>
            <div class="element post-transition-metal c14 r7">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">114</div>
                    <div class="label">
                        <div class="symbol">Fl</div>
                        <div class="name">Flerovio</div>
                    </div>
                    <div class="atomic-mass">(289)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>32</li>
                        <li>18</li>
                        <li>4</li>
                    </ul>
                </div>
            </div>
            <div class="element unknown c15 r7">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">115</div>
                    <div class="label">
                        <div class="symbol">Mc</div>
                        <div class="name">Moscovio</div>
                    </div>
                    <div class="atomic-mass">(290)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>32</li>
                        <li>18</li>
                        <li>5</li>
                    </ul>
                </div>
            </div>
            <div class="element unknown c16 r7">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">116</div>
                    <div class="label">
                        <div class="symbol">Lv</div>
                        <div class="name">Livermorio</div>
                    </div>
                    <div class="atomic-mass">(293)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>32</li>
                        <li>18</li>
                        <li>6</li>
                    </ul>
                </div>
            </div>
            <div class="element unknown c17 r7">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">117</div>
                    <div class="label">
                        <div class="symbol">Ts</div>
                        <div class="name">Teneso</div>
                    </div>
                    <div class="atomic-mass">(294)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>32</li>
                        <li>18</li>
                        <li>7</li>
                    </ul>
                </div>
            </div>
            <div class="element unknown c18 r7">
                <input class="activate" type="radio" name="elements" />
                <input class="deactivate" type="radio" name="elements" />
                <div class="overlay"></div>
                <div class="square">
                    <div class="model">
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                        <div class="orbital">
                            <div class="electron"></div>
                            <div class="electron"></div>
                        </div>
                    </div>
                    <div class="atomic-number">118</div>
                    <div class="label">
                        <div class="symbol">Og</div>
                        <div class="name">Oganesón</div>
                    </div>
                    <div class="atomic-mass">(294)</div>
                    <ul class="atomic-weight">
                        <li>2</li>
                        <li>8</li>
                        <li>18</li>
                        <li>32</li>
                        <li>32</li>
                        <li>18</li>
                        <li>8</li>
                    </ul>
                </div>
            </div>
            <div class="placeholder lanthanoid c3 r6">
                <div class="square">57-71</div>
            </div>
            <div class="placeholder actinoid c3 r7">
                <div class="square">89-103</div>
            </div>
            <div class="gap c3 r8"></div>
            <div class="key">
                <div class="llista">
                    <label class="alkali-metal" for="alkali-metals">Metal alcalino</label>
                    <label class="alkaline-earth-metal" for="alkaline-earth-metals">Metal acalinotérreo</label>
                    <label class="lanthanoid" for="lanthanoids">Lantánidos</label>
                    <label class="actinoid" for="actinoids">Actínido</label>
                    <label class="transition-metal" for="transition-metals">Metal de transición</label>
                    <label class="post-transition-metal" for="post-transition-metals">Metal del bloque p</label>
                    <label class="metalloid" for="metalloids">Semimetal</label>
                    <label class="other-nonmetal" for="other-nonmetals">Otros no metales</label>
                    <label class="noble-gas" for="noble-gasses">Gases nobles</label>
                    <label class="unknown" for="unknown">Desconocida</label>
                </div>
            </div>
        </div>
    </div>
@endsection

