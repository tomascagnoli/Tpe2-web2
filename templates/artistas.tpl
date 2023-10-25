
<h2> Artistas de {$pais} </h2>
<div class="artistas-container">
    <table>
    <thead><tr><th>Id de artista</th><th>Artista</th><th>Cantidad de Álbumes</th></tr></thead>
    <tbody>
    
    {foreach $artistas as $artista} 
        <tr>
        <td class="id_artistas">{$artista->id_artista}</td>
        <td>{$artista->artista}</td>
        <td>{$artista->nro_albumes}</td>
        </tr>
    {/foreach}
    
    </tbody>
    </table>
</div>