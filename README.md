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

## 3. Configuración de theme.json

El archivo theme.json permite definir los estilos globales de tu Block Theme, como colores, tipografías, tamaños de fuente, y más. Esto facilita mantener un [diseño](https://www.figma.com/design/cFa7bTCg6kaOJiVNeN9vVi/Mi-Primer-Tema?node-id=0-1&m=dev&t=RkAwFFc3yA208ADE-1) consistente en todo el tema.

### Estructura Básica del Archivo

El archivo `theme.json` debe estar en la raíz de tu tema. Una estructura básica se ve así:

```
{
	"$schema": "https://schemas.wp.org/trunk/theme.json",
	"version": 2,
	"settings": {},
	"styles": {}
}
```

### Paso 1: Agregar la paleta de colores

Basándonos en el diseño, agregamos los colores personalizados al archivo theme.json:

```
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

Paso 3: Configurar la fuente

Para este diseño, usaremos Helvetica y Arial. Configuramos la tipografía en el archivo theme.json:

```
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

```
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

```
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