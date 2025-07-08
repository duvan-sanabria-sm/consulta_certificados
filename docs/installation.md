➡️ [Volver a la documentación principal](../README.md)

# 🛠 Instalación y Configuración

## Requisitos previos

- PHP 7.4 o superior
- Composer instalado

## Instalación del proyecto

```bash
composer create-project codeigniter4/appstarter
```

## Configuración de la base de datos

1. Copia el archivo `.env.example` a `.env`:
   ```bash
   cp .env.example .env
   ```

2. Abre `.env` y configura tu conexión a base de datos:

```env
database.default.hostname = localhost
database.default.database = u407200112_consultas_cert
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

3. Ajusta también la `baseURL` según tu entorno local:

```env
app.baseURL = 'http://localhost:8080/'
```


