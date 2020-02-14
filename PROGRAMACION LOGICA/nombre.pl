hombre (dante).
hombre (carlos).
hombre (beto). 
hombre (andres).

espadre(dante,carlos).
espadre(carlos,beto).
espadre(beto,andres).  

esabuelo(X,Y):-
espadre(x,A),
espadre(A.Y).