function PropertyCard(props) {
  return (
    <div className="card">
      <div className="card-body">
        <h5>{props.name}</h5>
        <p>{props.city}</p>
        <p>₹{props.price}</p>
      </div>
    </div>
  );
}

export default PropertyCard;