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

```bash
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

## 3. Configuración de theme.json

[theme.json](https://developer.wordpress.org/themes/global-settings-and-styles/introduction-to-theme-json/)
El archivo theme.json permite definir los estilos globales de tu Block Theme, como colores, tipografías, tamaños de fuente, y más. Esto facilita mantener un [diseño](https://www.figma.com/design/cFa7bTCg6kaOJiVNeN9vVi/Mi-Primer-Tema?node-id=0-1&m=dev&t=RkAwFFc3yA208ADE-1) consistente en todo el tema.

### Estructura Básica del Archivo

- [Settings](https://developer.wordpress.org/themes/global-settings-and-styles/settings/)
- [Styles](https://developer.wordpress.org/themes/global-settings-and-styles/styles/)

El archivo `theme.json` debe estar en la raíz de tu tema. Una estructura básica se ve así:

```JSON
{
 "$schema": "https://schemas.wp.org/trunk/theme.json",
 "version": 2,
 "settings": {},
 "styles": {}
}
```

### Paso 1: Agregar la paleta de colores

[Referencias](https://developer.wordpress.org/block-editor/reference-guides/themes/theme-json/#color)
Basándonos en el diseño, agregamos los colores personalizados al archivo theme.json:

```JSON
"settings": {
 "color": {
  "palette": [
   { "name": "Red", "slug": "red", "color": "#D63E4B" },
   { "name": "Dark Green", "slug": "dark-green", "color": "#4B595E" },
   { "name": "Teal", "slug": "teal", "color": "#96BDB4" },
   { "name": "Dark Gray", "slug": "dark-gray", "color": "#333333" },
   { "name": "White", "slug": "white", "color": "#FFFFFF" }
  ]
 }
}
```

Estos colores estarán disponibles en el editor de bloques.

### Paso 2: Definir los tamaños de fuente

[Referencias](https://developer.wordpress.org/block-editor/reference-guides/themes/theme-json/#typography)
Añadimos los tamaños de fuente mencionados en tu diseño:

```
"typography": {
 "fontSizes": [
  { "name": "Small", "slug": "small", "size": "14px" },
  { "name": "Body", "slug": "body", "size": "18px" },
  { "name": "Medium", "slug": "medium", "size": "20px" },
  { "name": "Large", "slug": "large", "size": "24px" },
  { "name": "Extra Large", "slug": "extra-large", "size": "28px" },
  { "name": "Title", "slug": "title", "size": "40px" },
  { "name": "Hero", "slug": "hero", "size": "50px" }
 ]
}
```

### Paso 3: Configurar la fuente

[Referencias](https://developer.wordpress.org/block-editor/reference-guides/themes/theme-json/#font-families)
Para este diseño, usaremos Helvetica y Arial. Configuramos la tipografía en el archivo theme.json:

```JSON
"typography": {
 "fontFamilies": [
  {
   "fontFamily": "Helvetica, Arial, sans-serif",
   "name": "Default Sans",
   "slug": "default-sans"
  }
 ]
}
```

### Paso 4: Aplicar estilos globales

Podemos aplicar estos colores, fuentes y tamaños a nivel global para garantizar consistencia en el tema:

```JSON
"styles": {
 "typography": {
  "fontFamily": "var:preset|font-family|default-sans"
 },
 "color": {
  "background": "var:preset|color|white",
  "text": "var:preset|color|dark-gray"
 }
}
```

### Resultado Final

Tu archivo theme.json completo debería lucir así:

```JSON
{
 "$schema": "https://schemas.wp.org/trunk/theme.json",
 "version": 2,
 "settings": {
  "color": {
   "palette": [
    { "name": "Red", "slug": "red", "color": "#D63E4B" },
    { "name": "Dark Green", "slug": "dark-green", "color": "#4B595E" },
    { "name": "Teal", "slug": "teal", "color": "#96BDB4" },
    { "name": "Dark Gray", "slug": "dark-gray", "color": "#333333" },
    { "name": "White", "slug": "white", "color": "#FFFFFF" }
   ]
  },
  "typography": {
   "fontFamilies": [
    {
     "fontFamily": "Helvetica, Arial, sans-serif",
     "name": "Default Sans",
     "slug": "default-sans"
    }
   ],
   "fontSizes": [
    { "name": "Small", "slug": "small", "size": "14px" },
    { "name": "Body", "slug": "body", "size": "18px" },
    { "name": "Medium", "slug": "medium", "size": "20px" },
    { "name": "Large", "slug": "large", "size": "24px" },
    { "name": "Extra Large", "slug": "extra-large", "size": "28px" },
    { "name": "Title", "slug": "title", "size": "40px" },
    { "name": "Hero", "slug": "hero", "size": "50px" }
   ]
  }
 },
 "styles": {
  "typography": {
   "fontFamily": "var:preset|font-family|default-sans"
  },
  "color": {
   "background": "var:preset|color|white",
   "text": "var:preset|color|dark-gray"
  }
 }
}
```

## Template Parts

[Jerarquía de parts](https://developer.wordpress.org/themes/global-settings-and-styles/template-parts/)
Los archivos de los templateparts son los siguientes:

```bash
/parts
├── header.html
└── footer.html
```

## Templates

[Jerarquía de templates](https://developer.wordpress.org/themes/templates/template-hierarchy/)
Los archivos de los templates son los siguientes:

```bash
/templates
└── index.html
```

## Pattern

[Pattern](https://developer.wordpress.org/block-editor/reference-guides/themes/pattern/)
Los archivos de los patterns son los siguientes:

```bash
/patterns
└── mi-patron.php
```

Ejemplo de un patrón:

```php
<?php
 /**
  * Title: New Event Announcement
  * Slug: twentytwentytwo/new-event-announcement
  * Block Types: core/post-content
  * Post Types: post
  * Categories: featured, text
  */
?>
```

## Funciones
[Funciones](https://developer.wordpress.org/block-editor/reference-guides/themes/functions/)
Los archivos de las funciones son los siguientes:

```bash
/functions.php
```
### WordPress Scripts
[WordPress Scripts](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/)
Este paquete ofrece una interfaz de línea de comandos y expone un binario llamado wp-scripts, por lo que puedes ejecutarlo directamente con npx, un ejecutor de paquetes de npm. Sin embargo, este módulo está diseñado para configurarse a través de la sección scripts en el archivo package.json de tu proyecto. Este ejemplo completo demuestra la mayoría de las capacidades incluidas.

Instalar el paquete ( ver los requirimientos de Node )

```bash
npm install @wordpress/scripts --save-dev
```

Ejemplo de un script en package.json:

```JSON
	{
    "scripts": {
        "build": "wp-scripts build",
        "check-engines": "wp-scripts check-engines",
        "check-licenses": "wp-scripts check-licenses",
        "format": "wp-scripts format",
        "lint:css": "wp-scripts lint-style",
        "lint:js": "wp-scripts lint-js",
        "lint:md:docs": "wp-scripts lint-md-docs",
        "lint:pkg-json": "wp-scripts lint-pkg-json",
        "packages-update": "wp-scripts packages-update",
        "plugin-zip": "wp-scripts plugin-zip",
        "start": "wp-scripts start",
        "test:e2e": "wp-scripts test-e2e",
        "test:unit": "wp-scripts test-unit-js"
    }
}
```

### GIT

- Crear un repositorio en GitHub.
- Crear un Branch.
- Pushear el repositorio a GitHub.

1. Crear un repositorio en GitHub y Agregar el repositorio remoto.

```bash
git init
git add .
git commit -m "Descripción del commit"
git remote add origin https://github.com/usuario/repositorio.git
git push -u origin master
```

2. Crear un Branch.

```bash
git checkout -b nombre-del-branch
```

3. Pushear el repositorio a GitHub.

```bash
git add .
git commit -m "Descripción del commit"
git push
```

## Subir el tema a WordPress.org

[Subir el tema a WordPress.org](https://es.wordpress.org/themes/getting-started/)
[Manual del Desarrolador](https://developer.wordpress.org/themes/)
