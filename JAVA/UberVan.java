package JAVA;

import java.util.ArrayList;
import java.util.Map;

public class UberVan extends Car {
    /*
     * Map<String, Map<String, Integer>> typeCarAccepted;
     * ArrayList<String> seatsMaterial;
     */
    public UberVan(String license, Account driver/*
                                                  * , Map<String, Map<String, Integer>> typeCarAccepted,
                                                  * ArrayList<String> seatsMaterial
                                                  */) {
        super(license, driver);
        /*
         * this.typeCarAccepted = typeCarAccepted;
         * this.seatsMaterial = seatsMaterial;
         */
    }

    @Override
    public void setPassenger(Integer passenger) {
        // TODO Auto-generated method stub
        if (passenger >= 6)
            super.setPassenger(passenger);
        else
            System.out.println("Debes asignar minimo 6 asientos");
    }

}
