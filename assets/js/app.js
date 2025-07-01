/* Base JavaScript */

import { initTestForm } from '../../vendor/derafu/content/resources/js/academy.js';
import { initBlogCards } from '../../vendor/derafu/content/resources/js/blog.js';
import { initDocTOC } from '../../vendor/derafu/content/resources/js/docs.js';

document.addEventListener('DOMContentLoaded', () => {
    initTestForm();
    initBlogCards();
    initDocTOC();
});
