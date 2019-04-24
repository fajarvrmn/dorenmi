package com.example.jimmy.dorenmi.adapter;


import android.app.Activity;
import android.content.Context;
import android.text.Html;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.TextView;

import com.example.jimmy.dorenmi.R;
import com.example.jimmy.dorenmi.app.AppController;
import com.example.jimmy.dorenmi.data.Data;

import java.util.List;


public class Adapter extends BaseAdapter {
    private Activity activity;
    private LayoutInflater inflater;
    private List<Data> items;

    public Adapter(Activity activity, List<Data> items) {
        this.activity = activity;
        this.items = items;
    }

    @Override
    public int getCount() {
        return items.size();
    }

    @Override
    public Object getItem(int location) {
        return items.get(location);
    }

    @Override
    public long getItemId(int position) {
        return position;
    }

    @Override
    public View getView(int position, View convertView, ViewGroup parent) {

        if (inflater == null)
            inflater = (LayoutInflater) activity
                    .getSystemService(Context.LAYOUT_INFLATER_SERVICE);

        if (convertView == null)
            convertView = inflater.inflate(R.layout.list_row, null);

        TextView pesananid = (TextView) convertView.findViewById(R.id.txt_PesananID);
        TextView namakonsumen = (TextView) convertView.findViewById(R.id.txt_namakonsumen);
        TextView namapesanan = (TextView) convertView.findViewById(R.id.txt_namakonsumen);
        TextView harga = (TextView) convertView.findViewById(R.id.txt_harga);

        Data data = items.get(position);

        pesananid.setText(data.getId());
        namakonsumen.setText(data.getNamaKonsumen());
        namapesanan.setText(data.getNamaKonsumen());
        harga.setText(data.getHarga());

        return convertView;
    }

}
