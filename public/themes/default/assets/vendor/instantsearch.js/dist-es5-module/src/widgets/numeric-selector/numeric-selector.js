'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _jsx = function () { var REACT_ELEMENT_TYPE = typeof Symbol === "function" && Symbol.for && Symbol.for("react.element") || 0xeac7; return function createRawReactElement(type, props, key, children) { var defaultProps = type && type.defaultProps; var childrenLength = arguments.length - 3; if (!props && childrenLength !== 0) { props = {}; } if (props && defaultProps) { for (var propName in defaultProps) { if (props[propName] === void 0) { props[propName] = defaultProps[propName]; } } } else if (!props) { props = defaultProps || {}; } if (childrenLength === 1) { props.children = children; } else if (childrenLength > 1) { var childArray = Array(childrenLength); for (var i = 0; i < childrenLength; i++) { childArray[i] = arguments[i + 3]; } props.children = childArray; } return { $$typeof: REACT_ELEMENT_TYPE, type: type, key: key === undefined ? null : '' + key, ref: null, props: props, _owner: null }; }; }();

var _react = require('react');

var _react2 = _interopRequireDefault(_react);

var _reactDom = require('react-dom');

var _reactDom2 = _interopRequireDefault(_reactDom);

var _utils = require('../../lib/utils.js');

var _classnames = require('classnames');

var _classnames2 = _interopRequireDefault(_classnames);

var _find = require('lodash/collection/find');

var _find2 = _interopRequireDefault(_find);

var _autoHideContainer = require('../../decorators/autoHideContainer.js');

var _autoHideContainer2 = _interopRequireDefault(_autoHideContainer);

var _Selector = require('../../components/Selector.js');

var _Selector2 = _interopRequireDefault(_Selector);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var bem = (0, _utils.bemHelper)('ais-numeric-selector');

/**
 * Instantiate a dropdown element to choose the number of hits to display per page
 * @function numericSelector
 * @param  {string|DOMElement} options.container CSS Selector or DOMElement to insert the widget
 * @param  {string} options.attributeName Name of the numeric attribute to use
 * @param  {Array} options.options Array of objects defining the different values and labels
 * @param  {number} options.options[i].value The numerical value to refine with
 * @param  {string} options.options[i].label Label to display in the option
 * @param  {string} [options.operator] The operator to use to refine
 * @param  {boolean} [options.autoHideContainer=false] Hide the container when no results match
 * @param  {Object} [options.cssClasses] CSS classes to be added
 * @param  {string|string[]} [options.cssClasses.root] CSS classes added to the parent `<select>`
 * @param  {string|string[]} [options.cssClasses.item] CSS classes added to each `<option>`
 * @return {Object}
 */

function numericSelector(_ref) {
  var container = _ref.container;
  var _ref$operator = _ref.operator;
  var operator = _ref$operator === undefined ? '=' : _ref$operator;
  var attributeName = _ref.attributeName;
  var options = _ref.options;
  var _ref$cssClasses = _ref.cssClasses;
  var userCssClasses = _ref$cssClasses === undefined ? {} : _ref$cssClasses;
  var _ref$autoHideContaine = _ref.autoHideContainer;
  var autoHideContainer = _ref$autoHideContaine === undefined ? false : _ref$autoHideContaine;

  var containerNode = (0, _utils.getContainerNode)(container);
  var usage = 'Usage: numericSelector({\n    container,\n    attributeName,\n    options,\n    cssClasses.{root,item},\n    autoHideContainer\n  })';

  var Selector = _Selector2.default;
  if (autoHideContainer === true) {
    Selector = (0, _autoHideContainer2.default)(Selector);
  }

  if (!container || !options || options.length === 0 || !attributeName) {
    throw new Error(usage);
  }

  var cssClasses = {
    root: (0, _classnames2.default)(bem(null), userCssClasses.root),
    item: (0, _classnames2.default)(bem('item'), userCssClasses.item)
  };

  return {
    init: function init(_ref2) {
      var helper = _ref2.helper;

      var currentValue = this._getRefinedValue(helper) || options[0].value;
      if (currentValue !== undefined) {
        helper.addNumericRefinement(attributeName, operator, currentValue);
      }

      this._refine = function (value) {
        helper.clearRefinements(attributeName);
        if (value !== undefined) {
          helper.addNumericRefinement(attributeName, operator, value);
        }
        helper.search();
      };
    },
    render: function render(_ref3) {
      var helper = _ref3.helper;
      var results = _ref3.results;

      _reactDom2.default.render(_jsx(Selector, {
        cssClasses: cssClasses,
        currentValue: this._getRefinedValue(helper),
        options: options,
        setValue: this._refine,
        shouldAutoHideContainer: results.nbHits === 0
      }), containerNode);
    },
    _getRefinedValue: function _getRefinedValue(helper) {
      var refinements = helper.getRefinements(attributeName);
      var refinedValue = (0, _find2.default)(refinements, { operator: operator });
      return refinedValue && refinedValue.value !== undefined && refinedValue.value[0] !== undefined ? refinedValue.value[0] : undefined;
    }
  };
}

exports.default = numericSelector;