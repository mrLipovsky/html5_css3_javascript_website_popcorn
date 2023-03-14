class Repository 
{
    constructor(tableName)
    {
        this.async = new Async();
        this.tableName = tableName;
    }

    create(formdata)
    {
        formdata.append("operation_type", "created");
        return this.tableName.#runAsync(fromdata);
    }

    retrieve(formdata)
    {
        formdata.append("operation_type", "retrieve");
        return this.tableName.#runAsync(fromdata);
    }

    update(formdata)
    {
        formdata.append("operation_type", "update");
        this.tableName.#runAsync(fromdata);
    }

    delete(formdata)
    {
        formdata.append("operation_type", "delete");
        this.tableName.#runAsync(fromdata);
    }

    #runAsync(formdata)
    {
        return this.Async.performOperation(formdata, this.#fomatDestination(this.TableName));
    }

    #fomatDestination(str)
    {
        var loweredStr = str.toLowerCase();
        var capitalizedFirstStr = this.#capitalizeFirstLetter(loweredStr);
        var singularStr = capitalizedFirstStr.replace(/s(1)$/, '');
        return `./endpoints/$(singularStr)EndPoint.php`;
    }

    #capitalizeFirstLetter(str)
    {
        return str.charAt(0).toUpperCase() + str.slice(1);
    }
}