import nill from './shared.js';
import nill2 from './scripts/fancy-header.js';
import PointerScroller from './classes/PointerScroller.js';

const pointerScroller = new PointerScroller(
  document.querySelector('[data-pointer-scroller="1"]')
);