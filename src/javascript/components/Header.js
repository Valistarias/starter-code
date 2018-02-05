/**
 * Represents a book.
 * @constructor
 * @param {string} title - The title of the book.
 * @param {string} author - The author of the book.
 */
class Header {

	constructor() {
		this.elt = document.querySelector( '.header' );

		this._registerDOM();
		this._bind();
	}

  // ====== public methods

  // ====== private methods
	_registerDOM() {
		this.elts = {};
		this.elts.logo = this.elt.querySelector( '.header__logo' );
	}

	_bind() {

	}

  // ====== getters / setters

}

export default Header;
