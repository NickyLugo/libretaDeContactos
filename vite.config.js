import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
//Aquí importamos la librería path
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            //Aquí ponemos el código para la importación de bootstrap 5
            resolve:{
                alias:{
                    '~boostrap': path.resolve(dirname, 'node_modules/boostrap'),
                }
            },
            //Fin de la importación de Bootstrap 5
        }),
    ],
});
