# Taller WP DevDay 2025

## 1. Configuración del Entorno Local y VS Code

Antes de empezar, asegurémonos de que tu entorno local esté configurado correctamente y de que tengas las herramientas necesarias para trabajar con WordPress.

### Requisitos previos
- Tener instalado:
- WordPress Studio [Link](https://wordpress.org/gutenberg/studio) o Local [Link](https://localwp.com).
- VS Code [descargar aquí](https://code.visualstudio.com).
- Extensiones recomendadas de VS Code:
- [WordPress Theme JSON CSS Autosuggest](https://marketplace.visualstudio.com/items?itemName=GabrielRose.wordpress-theme-json-css-autosuggest): Ayuda con sugerencias automáticas en el archivo theme.json.
- [WordPress Syntax Highlighter](https://marketplace.visualstudio.com/items?itemName=matthiashunt.wordpress-syntax-highlighter): Resalta la sintaxis de WordPress en PHP y JavaScript.
- [WordPress Hooks IntelliSense](https://marketplace.visualstudio.com/items?itemName=johnbillion.vscode-wordpress-hooks): Proporciona IntelliSense para hooks de WordPress.

### Instrucciones
- Instala Local o accede a WordPress Studio:
- Si usas Local, crea un nuevo sitio local y accede al panel de administración de WordPress.
- Si prefieres WordPress Studio, abre este enlace y crea un entorno directamente en el navegador.
- Configura VS Code con las extensiones recomendadas:
- Abre VS Code y busca cada extensión en el Marketplace.
- Instálalas y verifica que estén habilitadas.

## 2. Creación de un Block Theme Base

Usaremos el plugin Create Block Theme para generar un tema en blanco y empezar a construir desde ahí.

### Requisitos previos
- Instala los siguientes plugins en tu instalación de WordPress:
1. [Performance Lab](https://wordpress.org/plugins/performance-lab/): Optimiza el rendimiento del sitio.
2. [Create Block Theme](https://wordpress.org/plugins/create-block-theme/): Herramienta para generar Block Themes de forma rápida.

### Instrucciones
1. Instala y activa los plugins:
- Ve a Plugins > Añadir nuevo en el panel de WordPress.
- Busca e instala Performance Lab y Create Block Theme.
- Activa ambos plugins.
2. Crea un tema en blanco:
- Ve al menú Apariencia > Create Block Theme.
- En la sección “Action”, selecciona la opción “Create Blank Theme”.
- Escribe un nombre para tu tema (por ejemplo, “Mi Block Theme”).
- Haz clic en Generate. Esto creará un tema en blanco que podrás personalizar.
3. Activa el tema:
- Ve a Apariencia > Temas y activa el tema que acabas de generar.
4. Estructura inicial del tema:

El plugin generará los siguientes archivos y carpetas dentro del directorio de tu tema:

```
/mi-block-theme
├── style.css
├── theme.json
├── /templates
│   └── index.html
└── /parts
    ├── header.html
    └── footer.html
```
Estos archivos serán la base para tu Block Theme.