import vars from '../_vars';
import {elementHeight,stickyHeader} from '../functions/customFunctions';

const {header, currentEvents, eventVideoBox} = vars;


elementHeight(header, 'header-height');
elementHeight(currentEvents, 'current-events-height');
elementHeight(eventVideoBox, 'video-events-height');



stickyHeader(header, 300, 250 , 'ease')