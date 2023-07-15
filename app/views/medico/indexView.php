
<div class="container-content">
    <div class="content">

    <h1 class="h3 ">cantidad de medicos <?php echo $data['cant_medicos'] ?></h1>
    <table class="table">
    <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Documento</th>
      <th scope="col">Email</th>
      <th scope="col">Perfil profesional</th>
      <th scope="col">Años de experiencia</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
    <?php
    if(isset($data['Doctors'])){
        foreach ($data['Doctors'] as $key ) {
            ?>
            <tr>
                <td><?php echo $key->nombre; ?></td>
                <td><?php echo $key->documento; ?></td>
                <td><?php echo $key->email; ?></td>
                <td><?php echo $key->perfil_profesional; ?></td>
                <td><?php echo $key->anios_experiencia; ?></td>
                <td> <a href="/medico/eliminar/<?php echo $key->cod_medico ?>"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ff0000}</style><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></a></td>
                <td><a href="/medico/edit/<?php echo $key->cod_medico ?>"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></a></td>
                <td><a href="/medico/details/<?php echo $key->cod_medico ?>"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg></a></td>
            
            </tr>
            <?php
        }
    }
    ?>
    </table>
    <button class="button"> <a href="/medico/create">Añadir Nuevo</a></button>
    </div>
</div>