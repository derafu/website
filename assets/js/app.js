/* Base JavaScript */

import { initTestForm } from '../../vendor/derafu/content/assets/js/academy.js';
import { initBlogCards } from '../../vendor/derafu/content/assets/js/blog.js';
import { initDocTOC } from '../../vendor/derafu/content/assets/js/docs.js';

document.addEventListener('DOMContentLoaded', () => {
    initTestForm();
    initBlogCards();
    initDocTOC();
});
