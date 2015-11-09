
<b> CANALES EXISTENTES</b>
<table border="0" width="100%" cellpadding="0" cellspacing="10">

    <tr><td><b>NOMBRE</b></td><td><b>EMAIL</b></td><td><b>DESCRIPCION</b></td></tr>

{section loop=$canal name=i}
<tr><td>{$canal[i]->get('nombre')}</td><td>{$canal[i]->get('email')}</td><td>{$canal[i]->get('descripcion')}</td></tr>
{/section}

</table>

