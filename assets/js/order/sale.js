function Sale()
{
    var sale_order_no; 
    var customer_id;
    var remarks;
    Sale.prototype.setOrderNo = function(value)
    {
        this.sale_order_no = value;
    }
    Sale.prototype.getOrderNo = function()
    {
        return this.sale_order_no;
    }
    Sale.prototype.setCustomerId = function(value)
    {
        this.customer_id = value;
    }
    Sale.prototype.getCustomerId = function()
    {
        return this.customer_id;
    }
    Sale.prototype.setRemarks = function(value)
    {
        this.remarks = value;
    }
    Sale.prototype.getRemarks = function()
    {
        return this.remarks;
    }
}

