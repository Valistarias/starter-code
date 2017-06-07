class Header {

	constructor() {
		this.elt = document.querySelector('.header');

		this._registerDOM();
		this._bind();
	}

  // ====== public methods

  // ====== private methods
	_registerDOM() {
		this.elts = {};
		this.elts.logo = this.elt.querySelector('.header__logo');
	}

	_bind() {
		
	}

  // ====== getters / setters

}

export default Header;