import React from "react";

const Paginate = (props) => {
  const pageNumbers = [];

  for (let i = 1; i <= Math.ceil(props.totalItems / props.itemsPerPage); i++) {
    pageNumbers.push(i);
  }
  return (
    <nav className="pagination pagination-sm justify-content-end border-0">
      {pageNumbers.map(number => {
        return (
          <li className="page-item">
            <a
              onClick={() => props.pageSelected(number)}
              href="!#"
              className="page-link"
            >
              {number}
            </a>
          </li>
        );
      })}
    </nav>
  );
};

export default Paginate;
