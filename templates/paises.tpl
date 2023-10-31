
    <a href="login/modificar">Modificar Informacion</a>

    <ul>
        {foreach $paises as $paisActual} 
            <li class="paises">{$paisActual->pais}</li>
        {/foreach}
    </ul>
