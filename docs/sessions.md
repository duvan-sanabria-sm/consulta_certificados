➡️ [Volver a la documentación principal](../README.md)

# 💾 Manejo de Sesiones en Entornos Locales

## Problema común

```
Warning: session_start(): open(...)
```

Este error suele ocurrir cuando PHP no puede acceder a la ruta configurada para guardar archivos de sesión.

## Causas frecuentes

- Ruta incorrecta en `php.ini`
- Carpeta sin permisos de escritura

## Soluciones

### 1. Verifica la ruta en `php.ini`

```ini
session.save_path = "C:/laragon/tmp"  ; o tu ruta personalizada
```

### 2. Establece una ruta personalizada en `.env` de CodeIgniter:

```env
session.savePath = 'writable/session'
```

### 3. Asegura los permisos de la carpeta

En Linux:
```bash
chmod -R 775 writable/session
```

En Windows, asegúrate de que el servidor tenga acceso de lectura y escritura.

---

Tener las sesiones mal configuradas puede afectar autenticación, formularios, mensajes flash y más. Se recomienda probar el sistema de sesiones temprano durante el desarrollo.

