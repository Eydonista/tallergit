





    <form action="{$gvar.l_global}videos.php" method="post"> 
       
       
       {if isset($canal)}
       <div>
   <table>
    
    <tr>
        
        <td><b>VIDEOS: del canal {$canal->get('nombre')} </b></td>
    </tr>
   
        
        {section loop=$canal->components['video']['c_v'] name=i}
        
         <tr>
         <td><b>TITULO:  </b> {$canal->components['video']['c_v'][i]->get('titulo')}    <br>
         <b>DESCRIPCION:  </b> {$canal->components['video']['c_v'][i]->get('descripcion')}    <br>
         <b>URL </b> {$canal->components['video']['c_v'][i]->get('url')}    <br>
         <b>FECHA SUBIDA </b> {$canal->components['video']['c_v'][i]->get('subida')}    <br>
         ---------------------------------------------------------------------------
         </td>
    </tr>
        {/section}
        
   
</table>


</div>

       
       
           
       
       {/if}
       
       <b>Inserte el nombre del canal: <br> </b><input type="text" name="nombre">
           <input class="btn btn-default" type="submit" value="Buscar videos" >
    </form>  
