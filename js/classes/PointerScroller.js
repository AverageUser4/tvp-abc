export default class PointerScroller {

  container;
  content;
  startX;
  hasBeenMoved = false;
  additionalMovement = 0;

  _translateX = 0;
  get translateX() {
    return this._translateX;
  }
  set translateX(value) {
    if(typeof value !== 'number' || isNaN(value))
      console.error('Value given for translateX is not a number.');

    this._translateX = value;
    this.content.style.transform = `translateX(${value}px)`;
  }

  invokeOnPointerDown = (event) => this.onPointerDown(event);
  invokeOnPointerUp = () => this.onPointerUp();
  invokeOnPointerMove = (event) => this.onPointerMove(event);

  constructor(container) {
    this.container = container;
    this.content = container.children[0];

    container.addEventListener('pointerdown', this.invokeOnPointerDown);

    container.addEventListener('click', (event) => this.hasBeenMoved && event.preventDefault());

    window.addEventListener('resize', () => this.translateX = 0);
  }

  onPointerDown(event) {
    event.preventDefault();
      
    this.startX = event.clientX;
    window.addEventListener('pointermove', this.invokeOnPointerMove);
    window.addEventListener('pointerup', this.invokeOnPointerUp);
    window.addEventListener('pointercancel', this.invokeOnPointerUp);
  }

  onPointerUp() {
    window.removeEventListener('pointermove', this.invokeOnPointerMove);
    window.removeEventListener('pointerup', this.invokeOnPointerUp);
    window.removeEventListener('pointercancel', this.invokeOnPointerUp);

    this.content.style.transition = '500ms';
    setTimeout(() => {
      this.content.style.transition = 'none';
    }, 500);

    this.translateX += this.additionalMovement;

    if(-this.translateX > this.content.scrollWidth - this.content.clientWidth)
      this.translateX = -(this.content.scrollWidth - this.content.clientWidth);
    else if(this.translateX > 0)
      this.translateX = 0;

    setTimeout(() => {
      this.hasBeenMoved = false;
    })
  }

  onPointerMove(event) {
    this.additionalMovement = event.clientX - this.startX;
    this.translateX = this.translateX + this.additionalMovement;
    this.startX = event.clientX;

    this.hasBeenMoved = true;
  }

}