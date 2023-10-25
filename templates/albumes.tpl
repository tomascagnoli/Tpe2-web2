
    <h2>Los mejores albumes </h2> 
    <table class="tableAlbumes">
    <thead><tr><th>Id del artista</th><th>Album</th><th>Cantidad de canciones</th><th>Fecha de publicacion</th></tr></thead>
    <tbody>
    {foreach $albumes as $album} 
        <tr>
        <td>{$album->id_artista} </td>
        <td>{$album->album}  </td>
        <td>{$album->nro_canciones} </td>
        <td>{$album->fecha_publicacion} </td>
        </tr>
    {/foreach}
    </tbody>
    </table>