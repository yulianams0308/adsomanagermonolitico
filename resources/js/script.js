// // document.addEventListener("DOMContentLoaded", function() {
// //     const botonToggle = document.getElementById("boton-toggle");
// //     const barraNavegacion = document.querySelector(".barra-navegacion");

// //     botonToggle.addEventListener("click", function() {
// //         barraNavegacion.classList.toggle("visible");
// //     });
// // });
// document.getElementById('eliminarBtn').addEventListener('click', function() {
//     document.getElementById('confirmacion').style.display = 'block';
// });

// document.getElementById('confirmarBtn').addEventListener('click', function() {
//     // Aquí puedes agregar la lógica para eliminar el elemento o realizar la acción deseada.
//     // Por ejemplo, puedes hacer una solicitud AJAX para eliminar un elemento en el servidor.

//     // Una vez que se haya realizado la acción, puedes ocultar la ventana de confirmación.
//     document.getElementById('confirmacion').style.display = 'none';
// });

// document.getElementById('cancelarBtn').addEventListener('click', function() {
//     // Si el usuario cancela, simplemente oculta la ventana de confirmación.
//     document.getElementById('confirmacion').style.display = 'none';
// });

// document.getElementById('eliminarEnlace').addEventListener('click', function(event) {
//     event.preventDefault(); // Evita que el enlace navegue a otra página

//     document.getElementById('confirmacion').style.display = 'block';
// });

// document.getElementById('confirmarBtn').addEventListener('click', function() {
//     // Aquí puedes agregar la lógica para eliminar el elemento o realizar la acción deseada.
//     // Por ejemplo, puedes hacer una solicitud AJAX para eliminar un elemento en el servidor.

//     // Una vez que se haya realizado la acción, puedes ocultar la ventana modal.
//     document.getElementById('confirmacion').style.display = 'none';
// });

// document.getElementById('cancelarBtn').addEventListener('click', function() {
//     // Si el usuario cancela, simplemente oculta la ventana modal.
//     document.getElementById('confirmacion').style.display = 'none';
// });

// var data = {
//     "xScale": "ordinal",
//     "yScale": "linear",
//     "main": [{
//         "className": ".pizza",
//         "data": [{
//                 "x": "Pepperoni",
//                 "y": 4
//             },
//             {
//                 "x": "Cheese",
//                 "y": 8
//             }
//         ]
//     }]
// };
// var myChart = new xChart('bar', data, '#mycharts');


//logo carga
document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.getElementById("login-form");
    const loginLink = document.getElementById("login-link");
    const loader = document.querySelector(".loader");

    loginLink.addEventListener("click", function(event) {
        event.preventDefault(); // Prevent the default link behavior
        loginForm.style.display = "none";
        loader.style.display = "block"; // Show the loader

        // Simulate an asynchronous process (e.g., an AJAX request) for 2 seconds
        setTimeout(function() {
            // Once the process is complete, you can navigate to the destination page
            window.location.href = loginLink.getAttribute("href");
        }, 6000);
    });
});

const boton = document.getElementById('miBoton');
const contenido = document.getElementById('contenidoOculto');

boton.addEventListener('mouseover', function() {
    contenido.style.display = 'block';
});

boton.addEventListener('mouseout', function() {
    contenido.style.display = 'none';
});