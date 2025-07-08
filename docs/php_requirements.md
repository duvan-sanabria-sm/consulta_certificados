➡️ [Volver a la documentación principal](../README.md)

# 📦 Requisitos de PHP

## Extensiones requeridas

Este proyecto requiere las siguientes extensiones habilitadas en PHP:

- `intl`
- `mbstring`
- `zip` (necesaria para importar archivos Excel con PhpSpreadsheet)
- `json` (habilitada por defecto)
- `mysqlnd`
- `libcurl` (si se utiliza la biblioteca `HTTP\CURLRequest` de CodeIgniter)

## Cómo habilitarlas

### Windows (XAMPP, Laragon)

1. Abre tu archivo `php.ini`.
2. Busca y descomenta (quita el `;`) las siguientes líneas:
   ```ini
   extension=zip
   extension=intl
   extension=mbstring
   ```
3. Guarda y reinicia Apache o Nginx.
   
4. **Tener en cuenta**: Si estas extensiones no están habilitadas, funciones importantes como la importación de archivos Excel o el manejo correcto de cadenas podrían no funcionar correctamente.

