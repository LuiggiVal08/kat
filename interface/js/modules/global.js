export function useState(initialValue) {
  // Guardamos el estado en una variable
  let state = initialValue;

  // Definimos una función para obtener el estado actual
  function getState() {
    return state;
  }

  // Definimos una función para actualizar el estado
  function setState(newState) {
    state = newState;
  }

  // Retornamos un objeto con las funciones getState y setState
  return [getState, setState];
}
export const regExp = {
  name: /^[A-Za-zÁÉÍÓÚÑáéíóúñ\s]{3,}$/,
  dni: /^[\d\s]{6,13}$/,
  username: /^[A-Za-z0-9_.\-]{4,16}$/,
  email: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
  token: /^[a-zA-Z0-9_\-]{10}$/,
  date: /^\d{4}[-\/]\d{2}[-\/]\d{2}$/,
  password: /^[A-Za-z\d]{4,8}$/,
  userEmail: /^([a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}\.[a-zA-Z]{2,}|[a-zA-Z0-9._-]{3,})$/,
  zip: /^[\d]{4,}$/,
  phone: /^(\(\d{3,4}\)\s)?(\d{3}-\d{4})$/,
  text: /^[A-Za-z0-9\s.,!?¡¿()-_&$%#@+:;'"]{1,}$/,
  montoBs: /^(?:Bs\. )?\d{1,3}(?:[.,]\d{3})*(?:[.,]\d{1,2})?$/
}
export const validData = (data, exp) => {
  return regExp[exp].test(data)
}
export const validInput = (input, exp) => {
  if (regExp[exp].test(input.value)) {
    input.classList.add('valid')
    input.classList.remove('no-valid')
  } else {
    input.classList.remove('valid')
    input.classList.add('no-valid')
  }
  return regExp[exp].test(input.value)
}
class Format {
  format = (value, methodName) => {
    if (typeof this[methodName] === 'function') {
      return this[methodName](value);
    } else {
      console.error(`Método no reconocido: ${methodName}`);
      return value;
    }
  }
  phone = (value) => {
    let numeroLimpio = value.replace(/\D/g, '');
    if (numeroLimpio.length >= 11) {
      numeroLimpio = numeroLimpio.substring(0, 11);
      const formato = /^(\d{3,4})(\d{3})(\d{4})$/;

      const numeroFormateado = numeroLimpio.replace(formato, '($1) $2-$3');
      return numeroFormateado;
    }
    const formato = /^(\d{3,4})(\d{3})(\d{4})$/;
    const numeroFormateado = numeroLimpio.replace(formato, '($1) $2-$3');
    return numeroFormateado;
  }
  zip = (value) => {
    var valueInputReplace = value.replace(/[^\d]/g, '');
    return valueInputReplace;
  }
  name = (value) => {
    var valueInputReplace = value.replace(/[^\p{L}\s]/gu, '').replace(/\d+/g, ' ').replace(/\s+/g, ' ');
    return valueInputReplace;
  }
  text = (value) => {
    var valueInputReplace = value.replace(/[^a-zA-Z0-9áéíóúñü-\s]/g, '');
    return valueInputReplace;
  }
  email = (value) => {
    var valueInputReplace = value.replace(/[^a-zA-Z0-9@._-]/g, '');
    return valueInputReplace;
  }
  username = (value) => {
    // Reemplazar caracteres no válidos para el username
    var valueInputReplace = value.replace(/[^A-Za-z0-9_.\-]/g, '');
    return valueInputReplace;
  }
  userEmail = (value) => {
    // Reemplazar caracteres no válidos para el userEmail
    var valueInputReplace = value.replace(/[^a-zA-Z0-9._@-]/g, '');
    return valueInputReplace;
  }
  password = (value) => {
    // Reemplazar caracteres no válidos para el password
    var valueInputReplace = value.replace(/[^A-Za-z0-9_.-]/g, '');
    return valueInputReplace;
  }
  dni = (value) => {
    if (/^\d*$/.test(value) && value != '') {
      const valueWithoutSpaces = value.replace(/ /g, '');
      const reversedValue = valueWithoutSpaces.split('').reverse().join('');
      const formattedValue = reversedValue.match(/.{1,3}/g).join(' ');
      const finalValue = formattedValue.split('').reverse().join('');
      return finalValue;
    } else {
      let valueInputReplace = value.replace(/[^\d]/g, '');
      return valueInputReplace;
    }
  }
  date = (value) => {
    // Reemplazar caracteres no válidos para la fecha
    var valueInputReplace = value.replace(/[^0-9/-]/g, '');
    return valueInputReplace;
  }
  montoBs = (monto) => {
    // var cleanValue = value.replace(/[^\d,]/g, '');

    // var parts = cleanValue.split(',');

    // // Formatear parte entera con espacio como separador de miles
    // parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, '.');

    // var formattedValue = parts.join(',');

    // Devuelve el monto formateado
    return monto;
  }
}

export const formatInput = new Format()

export function notification(texto, type) {
  // Crear elemento div para el mensaje
  var mensaje = document.createElement('div');

  if (type == 'error') {
    mensaje.style.color = '#ff0000';
  } else if (type == 'success') {
    mensaje.style.color = 'var(--color-success)';
  } else {
    mensaje.style.color = 'var(--color-white)';
  }

  mensaje.textContent = texto;

  // Aplicar estilos CSS al mensaje
  mensaje.style.position = 'fixed';
  mensaje.style.top = '-100px'; // Inicialmente fuera de la pantalla
  mensaje.style.right = '0';
  mensaje.style.left = '0';
  mensaje.style.margin = '0 auto';
  mensaje.style.width = '100%';
  mensaje.style.background = 'var(--color-secondary)';
  mensaje.style.padding = '20px';
  mensaje.style.textAlign = 'center';
  mensaje.style.zIndex = '9999'; // Para asegurar que esté sobre todo el contenido
  mensaje.style.transition = 'top 0.8s'; // Transición de 0.5 segundos para la propiedad top

  // Agregar mensaje al body
  document.body.appendChild(mensaje);

  // Mostrar el mensaje moviéndolo desde arriba
  setTimeout(function () {
    mensaje.style.top = '0';
  }, 100); // Pequeño retraso para asegurar la transición suave

  // Después de 5 segundos, ocultar el mensaje y eliminarlo
  setTimeout(function () {
    mensaje.style.top = '-100px'; // Mover el mensaje fuera de la pantalla hacia arriba
    setTimeout(function () {
      mensaje.remove(); // Eliminar el mensaje después de que termine la transición
    }, 500); // Tiempo de espera igual a la duración de la transición
  }, 5000);
}

export function fetchAPI(url, options = {}) {
  // Retorna una nueva Promise
  return new Promise((resolve, reject) => {
    // Realiza la petición HTTP utilizando la API fetch
    fetch(url, options)
      .then(response => {
        // Verifica si la respuesta es exitosa (código de estado en el rango 200-299)
        if (response.ok) {
          // Convierte la respuesta a formato JSON
          return response.json();
        }
        // Si la respuesta no es exitosa, rechaza la promesa con un mensaje de error
        throw new Error('Error en la solicitud: ' + response.statusText);
      })
      .then(data => {
        // Resuelve la promesa con los datos recibidos
        resolve(data);
      })
      .catch(error => {
        // Si ocurre algún error durante la petición, rechaza la promesa con el error
        reject(error);
      });
  });
}

export const redirect = (dir) => {
  window.location.href = `http://localhost/kat/${dir}`;
}