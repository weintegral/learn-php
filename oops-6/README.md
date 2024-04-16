# Exceptions and Errors Hierachy

[PHP Exception Hierarchy](https://php.watch/articles/PHP-exception-hierarchy)

Throwable (getMessage, getCode, getFile, getLine, getTrace, getTraceAsString, getPrevious)
    Error
        ArithmeticError
            DivisionByZeroError
        AssertionError
        CompileError
            ParseError
        TypeError
            ArgumentCountError
        ValueError
        DateError
    Exception
        DOMException
        JsonException
        LogicException
            BadFunctionCallException
            OutOfRangeException
        RunTimeException
        DateException
