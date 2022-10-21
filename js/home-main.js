import nill from './shared.js';
import nill2 from './scripts/fancy-header.js';
import PointerScroller from './classes/PointerScroller.js';

const pointerScroller = new PointerScroller(
  document.querySelector('[data-pointer-scroller="1"]')
);
const pointerScroller_2 = new PointerScroller(
  document.querySelector('[data-pointer-scroller="2"]')
);
const pointerScroller_3 = new PointerScroller(
  document.querySelector('[data-pointer-scroller="3"]')
);