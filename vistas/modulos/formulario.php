<!-- CONTENT HEADER -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Administrar Equipos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"> <a href="../../../umb">Inicio</a></li>
                    <li class="breadcrumb-item active">Gestot Formulario</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT HEADER -->

<!-- CONTENT -->
<section class="content">
    <div class="container-fluid">
        <div class="btn-agregar-formulario btnAgregar">
            <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-gestionar-formulario" data-dismiss="modal"> <i class="fas fa-plus-square"></i> Agregar Equipo</button>
        </div>

        <div class="table-responsive" style="padding: 18px;">
            <table id="tablaFormulario" class="table table-striped table-bordered nowrap" style="width:100%;">
                <thead class="bg-info">
                    <tr>
                        <td style="width:5%;">Id</td>
                        <td>Laboratorio</td>
                        <td>item</td>
                        <td>cant</td>
                        <td>placa</td>
                        <td>descripcion</td>
                        <td>marca</td>
                        <td>modelo</td>
                        <td>serie</td>
                        <td>ubicacion</td>
                        <td>estado</td>
                        <td>observacion</td>
                        <td>Vunitario</td>
                        <td>Vtotal</td>
                        <td>acciones</td>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

</section>
<!-- ./CONTENT -->


<!-- VENTANA MODAL PARA REGISTRO Y ACTUALIZACION -->
<div class="modal fade" id="modal-gestionar-formulario">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <!-- ============================================================
            =MODAL HEADER
            ===============================================================-->
            <div class="modal-header bg-info">
                <h4 class="modal-title">Gestionar Equipos</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- ============================================================
            =MODAL BODY
            ===============================================================-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="hidden" id="idcategoria" name="categoria" value="">
                            <label for="texLaborartorio">Laboratorio</label>
                            <input type="text" class="form-control" name="item" id="texLaboratorio" placeholder="Ingrese el Laboratorio">
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="texItem">Item</label>
                            <input type="text" class="form-control" name="item" id="texItem" placeholder="Ingrese el Item">
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="texCantidad">Cantidad</label>
                            <input type="text" class="form-control" name="cantidad" id="texCantidad" placeholder="Ingrese la Cantida">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="texPlaca">Placa</label>
                            <input type="text" class="form-control" name="placa" id="texPlaca" placeholder="Ingrese la placa">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="texDescripcion">Descripcion</label>
                            <input type="text" class="form-control" name="descripcion" id="texDescripcion" placeholder="Ingrese la Descripcion">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="texMarca">Marca</label>
                            <input type="text" class="form-control" name="marca" id="texMarca" placeholder="Ingrese la marca">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="texModelo">Modelo</label>
                            <input type="text" class="form-control" name="modelo" id="texModelo" placeholder="Ingrese la Modelo">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="texSerie">Serie</label>
                            <input type="text" class="form-control" name="serie" id="texSerie" placeholder="Ingrese la serie">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="texUbicacion">Ubicacion</label>
                            <input type="text" class="form-control" name="serie" id="texUbicacion" placeholder="Ingrese la Ubicacion ">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="texObservacion">Observacion</label>
                            <input type="text" class="form-control" name="serie" id="texObservacion" placeholder="Ingrese la Observacion ">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="texVunitario">Valor de Unidad</label>
                            <input type="text" class="form-control" name="serie" id="texVunitario" placeholder="Ingrese el valor">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="texVtotal">Valor Total</label>
                            <input type="text" class="form-control" name="serie" id="texVtotal" placeholder="Ingrese el valor">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ddlEstado">Estado</label>
                            <select name="estado" id="ddlEstado" class="form-control select2bs4">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================
            =MODAL FOOTER
            ===============================================================-->
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnGuardar" class="btn btn-primary">Guardar</button>
            </div>

        </div>

    </div>

</div>
<!-- ./ VENTANA MODAL PARA REGISTRO Y ACTUALIZACION -->


<script>
    $(document).ready(function() {

        var accion = "";

        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        var table = $("#tablaFormulario").DataTable({
            "ajax": {
                "url": "ajax/formulario.ajax.php",
                "type": "POST",
                "dataSrc": ""
            },
            "language": {
                "processing": "Procesando...",
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "emptyTable": "Ningún dato disponible en esta tabla",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "infoThousands": ",",
                "loadingRecords": "Cargando...",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "aria": {
                    "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad",
                    "collection": "Colección",
                    "colvisRestore": "Restaurar visibilidad",
                    "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                    "copySuccess": {
                        "1": "Copiada 1 fila al portapapeles",
                        "_": "Copiadas %d fila al portapapeles"
                    },
                    "copyTitle": "Copiar al portapapeles",
                    "csv": "CSV",
                    "excel": "Excel",
                    "pageLength": {
                        "-1": "Mostrar todas las filas",
                        "1": "Mostrar 1 fila",
                        "_": "Mostrar %d filas"
                    },
                    "pdf": "PDF",
                    "print": "Imprimir"
                },
                "autoFill": {
                    "cancel": "Cancelar",
                    "fill": "Rellene todas las celdas con <i>%d<\/i>",
                    "fillHorizontal": "Rellenar celdas horizontalmente",
                    "fillVertical": "Rellenar celdas verticalmentemente"
                },
                "decimal": ",",
                "searchBuilder": {
                    "add": "Añadir condición",
                    "button": {
                        "0": "Constructor de búsqueda",
                        "_": "Constructor de búsqueda (%d)"
                    },
                    "clearAll": "Borrar todo",
                    "condition": "Condición",
                    "conditions": {
                        "date": {
                            "after": "Despues",
                            "before": "Antes",
                            "between": "Entre",
                            "empty": "Vacío",
                            "equals": "Igual a",
                            "notBetween": "No entre",
                            "notEmpty": "No Vacio",
                            "not": "Diferente de"
                        },
                        "number": {
                            "between": "Entre",
                            "empty": "Vacio",
                            "equals": "Igual a",
                            "gt": "Mayor a",
                            "gte": "Mayor o igual a",
                            "lt": "Menor que",
                            "lte": "Menor o igual que",
                            "notBetween": "No entre",
                            "notEmpty": "No vacío",
                            "not": "Diferente de"
                        },
                        "string": {
                            "contains": "Contiene",
                            "empty": "Vacío",
                            "endsWith": "Termina en",
                            "equals": "Igual a",
                            "notEmpty": "No Vacio",
                            "startsWith": "Empieza con",
                            "not": "Diferente de"
                        },
                        "array": {
                            "not": "Diferente de",
                            "equals": "Igual",
                            "empty": "Vacío",
                            "contains": "Contiene",
                            "notEmpty": "No Vacío",
                            "without": "Sin"
                        }
                    },
                    "data": "Data",
                    "deleteTitle": "Eliminar regla de filtrado",
                    "leftTitle": "Criterios anulados",
                    "logicAnd": "Y",
                    "logicOr": "O",
                    "rightTitle": "Criterios de sangría",
                    "title": {
                        "0": "Constructor de búsqueda",
                        "_": "Constructor de búsqueda (%d)"
                    },
                    "value": "Valor"
                },
                "searchPanes": {
                    "clearMessage": "Borrar todo",
                    "collapse": {
                        "0": "Paneles de búsqueda",
                        "_": "Paneles de búsqueda (%d)"
                    },
                    "count": "{total}",
                    "countFiltered": "{shown} ({total})",
                    "emptyPanes": "Sin paneles de búsqueda",
                    "loadMessage": "Cargando paneles de búsqueda",
                    "title": "Filtros Activos - %d"
                },
                "select": {
                    "1": "%d fila seleccionada",
                    "_": "%d filas seleccionadas",
                    "cells": {
                        "1": "1 celda seleccionada",
                        "_": "$d celdas seleccionadas"
                    },
                    "columns": {
                        "1": "1 columna seleccionada",
                        "_": "%d columnas seleccionadas"
                    }
                },
                "thousands": ".",
                "datetime": {
                    "previous": "Anterior",
                    "next": "Proximo",
                    "hours": "Horas",
                    "minutes": "Minutos",
                    "seconds": "Segundos",
                    "unknown": "-",
                    "amPm": [
                        "am",
                        "pm"
                    ]
                },
                "editor": {
                    "close": "Cerrar",
                    "create": {
                        "button": "Nuevo",
                        "title": "Crear Nuevo Registro",
                        "submit": "Crear"
                    },
                    "edit": {
                        "button": "Editar",
                        "title": "Editar Registro",
                        "submit": "Actualizar"
                    },
                    "remove": {
                        "button": "Eliminar",
                        "title": "Eliminar Registro",
                        "submit": "Eliminar",
                        "confirm": {
                            "_": "¿Está seguro que desea eliminar %d filas?",
                            "1": "¿Está seguro que desea eliminar 1 fila?"
                        }
                    },
                    "error": {
                        "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
                    },
                    "multi": {
                        "title": "Múltiples Valores",
                        "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales.",
                        "restore": "Deshacer Cambios",
                        "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
                    }
                },
                "info": "Mostrando de _START_ a _END_ de _TOTAL_ entradas"
            },
            "columnDefs": [{
                    "targets": 10,
                    "sortable": false,
                    "render": function(data, type, full, meta) {

                        if (data == 1) {
                            return "<div class='bg-primary color-palette text-center'>ACTIVO</div> "
                        } else {
                            return "<div class='bg-danger color-palette text-center'>INACTIVO</div> "
                        }

                    }
                },



                {
                    "targets": 14,
                    "sortable": false,
                    "render": function(data, type, full, meta) {
                        return "<center>" +
                            "<button type='button' class='btn btn-danger btn-sm btnEliminar'> " +
                            "<i class='fas fa-trash'> </i> " +
                            "</button>" +
                            "</center>";
                    }
                }
            ],
            "columns": [{
                    "data": "IDequipo"
                },
                {
                    "data": "laboratorio"
                },
                {
                    "data": "item"
                },
                {
                    "data": "cant"
                },
                {
                    "data": "placa"
                },
                {
                    "data": "descripcion"
                },
                {
                    "data": "marca"
                },
                {
                    "data": "modelo"
                },
                {
                    "data": "serie"
                },
                {
                    "data": "ubicacion"
                },
                {
                    "data": "estado"
                },
                {
                    "data": "observacion"
                },
                {
                    "data": "Vunitario"
                },
                {
                    "data": "Vtotal"
                },
                {
                    "data": "acciones"
                }



            ]
        });

        $(".btn-agregar-Formulario").on('click', function() {
            accion = "registrar";
        });

        $('#tablaFormulario tbody').on('click', '.btnEliminar', function() {
            var data = table.row($(this).parents('tr')).data();

            var IDequipo = data["IDequipo"];

            var datos = new FormData();
            datos.append('accion', "eliminar")
            datos.append('IDequipo', IDequipo)

            swal.fire({

                title: "¡CONFIRMACION!",
                text: "Seguro que desea eliminar?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Sí, Eliminar",
                cancelButtonText: "Cancelar"

            }).then(resultado => {

                if (resultado.value) {

                    //LLAMADO AJAX
                    $.ajax({
                        url: "ajax/formulario.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta2) {

                            console.log(respuesta2);

                            table.ajax.reload(null, false);

                            Toast.fire({
                                icon: 'success',
                                title: respuesta2
                            });

                        }
                    })
                } else {
                    // alert("no se modifico la categoria");
                }

            })


        })


        // GUARDAR LA INFORMACION DE CATEGORIA DESDE LA VENTANA MODAL

        $("#btnGuardar").on('click', function() {

            var laboratorio = $("#texLaboratorio").val(),

                item = $("#texItem").val(),
                cant = $("#texCantidad").val(),
                placa = $("#texPlaca").val(),
                descripcion = $("#texDescripcion").val(),
                marca = $("#texMarca").val();
                modelo = $("#texModelo").val();
                serie = $("#texSerie").val();
                ubicacion = $("#texUbicacion").val();
                estado = $("#ddlEstado").val();
                observacion = $("#texObservacion").val();
                Vunitario = $("#texVunitario").val();
                Vtotal = $("#texVtotal").val();


            var datos = new FormData();

            datos.append('laboratorio', laboratorio);
            datos.append('item', item);
            datos.append('cant', cant);
            datos.append('placa', placa);
            datos.append('descripcion', descripcion);
            datos.append('marca', marca);
            datos.append('modelo', modelo);
            datos.append('serie', serie);
            datos.append('ubicacion', ubicacion);
            datos.append('estado', estado);
            datos.append('observacion', observacion);
            datos.append('Vunitario', Vunitario);
            datos.append('Vtotal', Vtotal);


            Swal.fire({
                title: '¡CONFIRMAR',
                text: "¿ESTA SEGURO QUE DESEA REGISTRAR?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "SI, DESEO REGISTRAR",
                cancelButtonText: "cancelar"
            }).then((resultado) => {

                if (resultado.value) {




                    $.ajax({

                        url: "ajax/formulario.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta2) {

                            console.log(respuesta2);

                            $("#modal-gestionar-formulario").modal('hide');

                            table.ajax.reload(null, false);

                            $("#texLaboratorio").val("");
                            $("#texItem").val("");
                            $("#texCantidad").val("");
                            $("#texPlaca").val("");
                            $("#texDescripcion").val("");
                            $("#texMarca").val("");
                            $("#texModelo").val("");
                            $("#texSerie").val("");
                            $("#texUbicacion").val("");
                            $("#ddlEstado").val([1]);
                            $("#texObservacion").val("");
                            $("#texVunitario").val("");
                            $("#texVtotal").val("");

                            Toast.fire({
                                icon: 'success',
                                title: 2
                            })


                        }
                    });

                } else {

                }
            });



        })

    })
</script>


<!--
    <form>

<div class="card-body">
    <div class="row">

        <div class="col-6">
            <label for="formGroupExampleInput">Nombres</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ingrese nombres completos ">
        </div>

        <div class="col-6">
            <label for="formGroupExampleInput">codigo</label>
            <input type="number" class="form-control" id="formGroupExampleInput" placeholder="ingrese codigo">
        </div>

        <div class="col-6">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>

        <div class="col-6">
            <label for="inputPass" >Password</label>
            <input type="password" class="form-control" id="inputPass" placeholder="Pass">
        </div>

    </div>

    </div>

    <div class="card-body">

    <button type="submit" class="btn btn-primary">Confirm</button>

    </div>
</form> -->