export default class PointerScroller {

  container;
  content;
  startX;

  constructor(container) {
    this.container = container;
    this.content = container.children[0];

    const onPointerMove = (event) => this.onPointerMove(event);

    container.addEventListener('pointerdown', (event) => {
      event.preventDefault();
      
      this.startX = event.clientX;
      window.addEventListener('pointermove', onPointerMove);
    });

    window.addEventListener('pointerup', () => {
      window.removeEventListener('pointermove', onPointerMove);
    });
    window.addEventListener('pointercancel', () => {
      window.removeEventListener('pointermove', onPointerMove);
    });
  }

  onPointerMove(event) {
    let amount = this.startX - event.clientX;
    
    const trans = this.content.style.transform;

    // if(trans)
    //   amount += parseInt(trans.match(/-*\d+/));

    console.log(trans,trans.match(/-*\d+/), amount);

    this.content.style.transform = `translateX(${amount}px)`;
  }

}