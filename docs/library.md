➡️ [Volver a la documentación principal](../README.md)

# Librerías Usadas en el Proyecto

Este documento describe las principales librerías y recursos externos utilizados en el proyecto web basado en PHP (probablemente con CodeIgniter u otro framework similar).

---

## 📦 Estilos CSS

### 1. **Estilos personalizados**
- **Archivo:** `assets/styles.css`
- **Propósito:** Contiene los estilos principales definidos por el desarrollador.

### 2. **Bootstrap**
- **Archivo:** `assets/bootstrap/css/bootstrap.min.css`
- **Propósito:** Framework CSS para estilos responsivos y componentes UI.
- **Versión estimada:** No especificada, probablemente v4 o v5.

### 3. **AdminLTE 3**
- **Archivo:** `assets/adminlt3/css/adminlte.min.css`
- **Propósito:** Plantilla de administración basada en Bootstrap 4.

---

## 🔠 Iconos

### 4. **Font Awesome**
- **CDN:** `https://kit.fontawesome.com/ad7d17c265.js`
- **Propósito:** Proporciona iconos como `fa-user-plus`, `fa-envelope`, etc.

---

## 🔧 Scripts y Funcionalidades

### 5. **jQuery**
- **CDN:** `https://code.jquery.com/jquery-3.6.0.min.js`
- **Propósito:** Manipulación del DOM y AJAX.

### 6. **AdminLTE JavaScript**
- **Archivo:** `assets/adminlt3/js/adminlte.js`
- **Propósito:** Script principal del template AdminLTE.

### 7. **Bootstrap Bundle JS**
- **Archivo:** `assets/bootstrap/js/bootstrap.bundle.min.js`
- **Propósito:** Incluye funcionalidades de Bootstrap + Popper.js.

---

## 📁 Scripts Personalizados

### 8. **AJAX Requests**
- **Archivo:** `assets/request/ajax.js`
- **Propósito:** Gestiona solicitudes AJAX en el sistema.

### 9. **Exportación a Excel**
- **Archivo:** `assets/request/excel.js`
- **Propósito:** Funcionalidades relacionadas con la exportación de datos a Excel.

### 10. **Manejo de Datos**
- **Archivo:** `assets/request/data.js`
- **Propósito:** Manejo o procesamiento de datos en el front-end.

---

## 💡 Observaciones

- Es recomendable incluir un archivo `package.json` o `composer.json` si se usan gestores como npm o Composer.
- Asegúrate de que las versiones de Bootstrap, jQuery y Font Awesome sean compatibles entre sí.

---

## ✅ Sugerencia

Puedes automatizar este resumen con herramientas como:
- [npm-check](https://www.npmjs.com/package/npm-check) si usas npm
- [Composer Show](https://getcomposer.org/doc/03-cli.md#show) si usas Composer

