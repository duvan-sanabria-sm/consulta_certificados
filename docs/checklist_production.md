➡️ [Volver a la documentación principal](../README.md);

## ⚙️ Checklist para Producción – CodeIgniter 4

A continuación se listan configuraciones que deben activarse o modificarse al preparar el entorno de producción:

---

### ✅ Descomentar para errores personalizados 404

```php
// $routes->set404Override('ErrorController::notFound');
```

### ✅  Asegúrate de que el entorno esté configurado como production para desactivar errores en pantalla y aplicar configuraciones seguras

```php
// CI_ENVIRONMENT = production
```

### ✅ ✅ Omitir errores detallados en consola del navegador (AJAX)
En producción, evita mostrar errores técnicos al usuario final o imprimir detalles en la consola. Si usas $.ajax, reemplaza o comenta los console.error(...):

```js
// Desarrollo
error: function(xhr, status, error) {
    console.error(`Error AJAX:
    Status: ${status} | 
    Código de estado HTTP: ${xhr.status} | 
    Texto estado: ${xhr.statusText} | 
    Mensaje de error: ${error} | 
    Respuesta completa: ${xhr.responseText}`);
}

// Producción
error: function(xhr, status, error) {
    // Mostrar mensaje genérico en pantalla si se requiere
    $('#main-table').hide();
    $('#errorText').text("Ocurrió un error. Intenta nuevamente más tarde.");
}
```
