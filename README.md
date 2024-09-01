# 2upra Task

1\. Interfaz de Usuario y Experiencia de Usuario (UI/UX)
  - [ ] **1.1. Página de Inicio**
    - [ ] Diseñar una página de inicio atractiva que muestre un buscador y los beats descargables. Ref (samplefocus)
          
  - [ ] **1.2. Formularios y Publicaciones**
    - [ ] Agregar descripciones informativas a todos los formularios.
    - [ ] Permitir la edición de publicaciones existentes.
    - [ ] Implementar la funcionalidad para adjuntar archivos a publicaciones ya creadas.
    - [ ] Numerar automáticamente los nombres de las rolas en el formulario de publicación de rola
          
  - [ ] **1.3. Navegación Móvil**
    - [ ] Verificar css móvil de todas las páginas.
    - [ ] Los usuarios no pueden cambiar de pestaña en la versión móvil.
          
  - [ ] **1.4. Reproductor de Música**
    - [ ] Optimizar la gestión de la lista de reproducción en el reproductor (el reproductor no entiende la carga ajax).
    - [ ] Ajustar el retraso en la reproducción mediante la API correspondiente (la api que cuenta las reproducciones).
          
  - [ ] **1.5. Notificaciones y Comentarios**
    - [ ] Implementar una sección de comentarios en las publicaciones.
    - [ ] Diseñar notificaciones más específicas y claras, incluyendo una para el registro exitoso de nuevos usuarios.
    - [ ] Contenido para cuando el panel de notificaciones este vacío. 
    - [ ] Mejor la gestion de notificaciones, pasar de long polling websocket
          
2\. Funcionalidades de Usuario
  - [ ] **2.1. Perfil y Configuración**
    - [ ] Permitir a los usuarios existentes seleccionar su rol como fan o artista en su primer inicio de sesión (para los que no ha elegido antes.
    - [ ] Poder cambiar tipo de usuario en las configuraciones.
    - [ ] Prevenir que los usuarios se sigan a sí mismos y reciban notificaciones propias de likes.
    - [ ] Ajustar y corregir los botones de seguir en las sugerencias de perfiles.
  - [ ] **2.2. Sistema de Chat y Contactos**
    - [ ] Implementar una página de chats para comunicación entre usuarios.
    - [ ] Crear una lista de contactos integrada con sugerencias de perfiles a seguir.
  - [ ] **2.3. Sistema de Motivación**
    - [ ] Desarrollar un sistema de motivación para incentivar la participación y actividad de los usuarios.
          
3\. Gestión de Contenido
  - [ ] **3.1. Música y Samples**
    - [ ] Adaptar la reproducción y visualización de rolas anidadas (álbumes).
    - [ ] Mejorar el sistema de filtrado en la sección de samples y ofrecer diferentes vistas.
    - [ ] Permitir la subida múltiple de samples de manera simultánea.
    - [ ] Implementar una búsqueda eficaz en la página de música con artistas sugeridos.
  - [ ] **3.2. Detección y Manejo de Duplicados**
    - [ ] Desarrollar un sistema frontal para la detección y gestión de contenido duplicado, incluyendo imágenes y audios. (Solo frontal para indicarle al usuario de que lo que sube esta duplicado, backend funciona mas o menos). 
    - [ ] Optimizar el uso de imágenes duplicadas reutilizando las existentes en lugar de cargar nuevas.
  - [ ] **3.3. Gestión de Rolas**
    - [ ] Añadir funcionalidades completas para la gestión de rolas, incluyendo restaurar, cambiar información, eliminar, recuperar de rechazo y marcar como "necesita cambios".
    - [ ] Ajustar el nombre de las rolas y optimizar la generación de waveforms.
          
4\. Sistema de Inversores y Patrocinios
  - [ ] **4.1. Plataforma de Inversores**
    - [ ] Desarrollar una interfaz mejorada para inversores que muestre el total recaudado, metas y una lista detallada de inversores.
      - Total recaudado - faltante
    - [ ] Incluir más detalles sobre el valor aportado por cada usuario y un historial completo de transacciones.
    - [ ] Proporcionar una explicación clara del algoritmo utilizado y un resumen de los logros alcanzados.
    - [ ] Crear una página de presentación atractiva para potenciales sponsors, incluyendo botones para realizar compras y donaciones.
    - [ ] Configurar que se sumen automáticamente $2.5 en acciones a los usuarios con estado "true_pro".
    - [ ] Depurar y optimizar los logs de Stripe y Wordpress relacionados con transacciones.
          
5\. Colaboraciones y Proyectos Conjuntos
  - [ ] **5.1. Sistema de Colaboraciones**
    - [ ] Diseñar un formulario específico para solicitudes de colaboración entre artistas.
    - [ ] Establecer una lógica sólida para el procesamiento y manejo de archivos asociados a colaboraciones, asegurando un tratamiento adecuado si el mismo usuario sube el mismo audio en diferentes ocasiones.
    - [ ] Implementar funcionalidades para cancelar cargas de archivos al cambiar de pestaña durante el proceso.
  - [ ] **5.2. Gestión de Archivos**
    - [ ] Mejorar la lógica para procesar, verificar la existencia y reemplazo de archivos, garantizando una gestión eficiente y segura de los mismos.
          
6\. Rendimiento y Optimización
  - [ ] **6.1. Aplicación Móvil**
    - [ ] Diseñar y finalizar la versión móvil de la aplicación, asegurando un rendimiento óptimo.
    - [ ] Crear un ícono representativo para la aplicación móvil.
    - [ ] Optimizar el rendimiento general de la versión de la aplicación móvil.
  - [ ] **6.2. Mejoras Generales**
    - [ ] Instalar y configurar un sistema de chat eficiente para soporte y comunicación interna.
    - [ ] Implementar un sistema de gestión de tareas integrado para facilitar el seguimiento y coordinación del equipo.
    - [ ] Optimizar y limpiar los registros (logs) de Wordpress para mejorar el rendimiento y reducir el espacio utilizado.
    - [ ] Ajustar y mejorar el optimizador de imágenes para una carga más rápida y eficiente.
          
7\. Seguridad y Mantenimiento
  - [ ] **7.1. Autenticación y Sesiones**
    - [x] Corregir errores relacionados con el inicio de sesión y registro de usuarios.
    - [x] Asegurar redirecciones correctas después de que los usuarios inicien sesión.
    - [x] Arreglar vulnerabilidades ssh

8\. Gestión de proyecto

