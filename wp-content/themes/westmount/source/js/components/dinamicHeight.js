import vars from '../_vars';
import {elementHeight,stickyHeader} from '../functions/customFunctions';

const {header} = vars;


elementHeight(header, 'header-height');
stickyHeader(header, 600, 150 , 'linear')